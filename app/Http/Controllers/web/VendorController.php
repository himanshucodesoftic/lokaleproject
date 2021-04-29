<?php
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
    
use App\Models\Web\Currency;
// use App\Models\Web\Index;
//for password encryption or hash protected
use App\Models\Web\Languages;

use App\Models\Core\Vendors;
use App\Models\Core\Categories;
use App\Models\Web\Images;
// use App\Models\Web\Products;
// use App\Models\Web\Currency;
namespace App\Http\Controllers\web;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB as Dbraw;

use App\Models\Web\Languages;
use App\Models\Web\Index;
use App\Models\Core\Vendors;
use App\Models\Core\Categories;
use App\Models\Web\Images;

use App\Models\Web\Products;
 use App\Models\Web\Currency;
 use Lang;
class VendorController extends Controller
{




    public function __construct(
        Index $index,
        Languages $languages,
        Products $products,
        Currency $currency,
        Vendors $vendors,
        Images $images,
        Categories $categorydata
    ) {
        $this->index = $index;
        $this->languages = $languages;
        $this->products = $products;
        $this->currencies = $currency;
        $this->theme = new ThemeController();
        $this->vendors = $vendors;
        $this->categories = $categorydata;
        $this->images = $images;
    }

   



    public function confirmVendor(Request $request)
    {


        
        $body = $request->all();
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $vendor_address = $request->input('vendor_address');
        $vendor_city = $request->input('vendor_city');
        $country = $request->input('country');
        $phonenumber = $request->input('phonenumber');
        $vendor_name = $request->file('vendor_name');
        $vendor_arabic_name = $request->input('vendor_arabic_name');
        $vendor_id = $request->session()->get('tgs-cust_id');
       
        $vendor_role_id=$request->input('role_type');

        $email = $request->input('email');
        $password = $request->file('password');
        $image = $request->file('image');


        error_log("--->>" . $image->getClientOriginalExtension() . public_path() . $image->getClientOriginalName());
        $src_file_logo = date('YmdHis') . $image->getClientOriginalName();
        $dest_file_logo = public_path() . "/Images/";
        $image->move(public_path() . "/Images/", $src_file_logo);
        $image = "/public/Images/" . $src_file_logo;
        DB::beginTransaction();
        $createdate = date("Y-m-d H:i:s");
         
        DB::table('vendors')->insert([
            
         'first_name'=>$firstName,
        'vendor_id'=>$vendor_id,
        'role_id' => $vendor_role_id,
         'last_name' => $lastName,
         'address' => $vendor_address,
         'city'=>$vendor_city,
     
            'vendor_name' => $vendor_name,
            'vendor_name_arabic' => $vendor_arabic_name,
            'email' => $email,
            'phone' => $phonenumber,
            'address' => $vendor_address,
            'image'=>$image,
           
        ]);
        $id = DB::getPdo()->lastInsertId();
        DB::commit();
        return \redirect('/vendorForm');
   

    }

    public function index(Request $request )
    {

        $sel_query = "SELECT * from vendors";
        $res_query = DBraw::select($sel_query);
       
        $res_query = json_decode(json_encode($res_query), true);
        if (count($res_query)) {
            foreach ($res_query as $res) {

         
                $productlist[] = array(
                    'id'=> $res['id'],
                    'vendor_name' => $res['vendor_name'],
                    'vendor_name_arabic' => $res['vendor_name_arabic'],
                    'image' => $res['image'],
                   'vendor_name_arabic'=>$res['vendor_name_arabic']
                 

                );
            }
        } else {
            $productlist = array();
        }
        
         return view("web.vendor_list",  compact(['productlist']));
  
}



public function vendorproduct(Request $request,$jspid)
{
    
  
         $title = array('pageTitle' => Lang::get('website.Product Detail'));
         $result = array();
         $result['commonContent'] = $this->index->commonContent();
         $final_theme = $this->theme->theme();
         //min_price
         if (!empty($request->min_price)) {
             $min_price = $request->min_price;
         } else {
             $min_price = '';
         }
 
         //max_price
         if (!empty($request->max_price)) {
             $max_price = $request->max_price;
         } else {
             $max_price = '';
         }
 
         if (!empty($request->limit)) {
             $limit = $request->limit;
         } else {
             $limit = 15;
         }
 
         $products = $this->products->getProductsBySlug($request->slug);
         if(!empty($products) and count($products)>0){
             
             //category
             $category = $this->products->getCategoryByParent($products[0]->products_id);
 
             if (!empty($category) and count($category) > 0) {
                 $category_slug = $category[0]->categories_slug;
                 $category_name = $category[0]->categories_name;
             } else {
                 $category_slug = '';
                 $category_name = '';
             }
             $sub_category = $this->products->getSubCategoryByParent($products[0]->products_id);
 
             if (!empty($sub_category) and count($sub_category) > 0) {
                 $sub_category_name = $sub_category[0]->categories_name;
                 $sub_category_slug = $sub_category[0]->categories_slug;
             } else {
                 $sub_category_name = '';
                 $sub_category_slug = '';
             }
 
             $result['category_name'] = $category_name;
             $result['category_slug'] = $category_slug;
             $result['sub_category_name'] = $sub_category_name;
             $result[''] = $sub_category_slug;
 
             $isFlash = $this->products->getFlashSale($products[0]->products_id);
 
             if (!empty($isFlash) and count($isFlash) > 0) {
                 $type = "flashsale";
             } else {
                 $type = "";
             }
             $postCategoryId = '';
             $data = array('page_number' => '0', 'type' => $type, 'products_id' => $products[0]->products_id, 'limit' => $limit, 'min_price' => $min_price, 'max_price' => $max_price);
             $detail = $this->products->products($data);
             $result['detail'] = $detail;
             if (!empty($result['detail']['product_data'][0]->categories) and count($result['detail']['product_data'][0]->categories) > 0) {
                 $i = 0;
                 foreach ($result['detail']['product_data'][0]->categories as $postCategory) {
                     if ($i == 0) {
                         $postCategoryId = $postCategory->categories_id;
                         $i++;
                     }
                 }
             }
 
             $data = array('page_number' => '0', 'type' => '', 'categories_id' => $postCategoryId, 'limit' => $limit, 'min_price' => $min_price, 'max_price' => $max_price);
             $simliar_products = $this->products->products($data);
             $result['simliar_products'] = $simliar_products;
 
             $cart = '';
             $result['cartArray'] = $this->products->cartIdArray($cart);
 
             //liked products
             $result['liked_products'] = $this->products->likedProducts();
 
             $data = array('page_number' => '0', 'type' => 'topseller', 'limit' => $limit, 'min_price' => $min_price, 'max_price' => $max_price);
             $top_seller = $this->products->products($data);
             $result['top_seller'] = $top_seller;
         }else{
             $products = '';
             $result['detail']['product_data'] = '';
         }
         
         $currency_symbol = session('symbol_left') ? session('symbol_left') : session('symbol_right') ;
         $currency  = DB::table('currencies')->where('symbol_left',$currency_symbol)->orwhere('symbol_right',$currency_symbol)->first();
         $result['currency_value'] = $currency ? $currency->value : 1;
    $sel_query = "SELECT *,vendors.vendor_id as vendor_id from products inner join vendors on vendors.vendor_id = products.vendor_id where vendors.vendor_id =" .   $jspid . " ;";
    $res_query = DBraw::select($sel_query);
    $res_query = json_decode(json_encode($res_query), true);
    if (count($res_query)) {
        foreach ($res_query as $res) {

            
            $productlist[] = array(
                'vendor_id' => $res['vendor_id'],
                    'products_image'=>$res['products_image']
            );
      
        }

    } else {
        $productlist = array();
    }

    // return view("web.detail", ['title' => $title, 'final_theme' => $final_theme])->with('result', $result);

    return view('web.vendor_page',['title' => $title, 'final_theme' => $final_theme],compact(['productlist']))->with('result', $result);
}





}