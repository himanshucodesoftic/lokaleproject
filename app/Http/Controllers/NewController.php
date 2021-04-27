<?php
namespace App\Http\Controllers;

use App\Http\Controllers\web\ThemeController;
use Illuminate\Support\Facades\DB;
use App\Models\Web\Currency;
use App\Models\Web\Index;
use App\Models\Web\Languages;
use App\Models\Web\News;
use App\Models\Web\Order;
use App\Models\Web\Products;
use App\Models\Web\Images;
use Auth;
use Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Lang;
use View;
use DB as Dbraw;
use Cookie;


class NewController extends Controller
{

    public function __construct(
        Index $index,
        News $news,
        Languages $languages,
        Products $products,
        Currency $currency,
        Order $order
    ) {
        $this->index = $index;
        $this->order = $order;
        $this->news = $news;
        $this->languages = $languages;
        $this->products = $products;
        $this->currencies = $currency;
        $this->theme = new ThemeController();
    }

    public function index()
    {

        $Images = new Images();
        $allimage = $Images->getimages();
        // return view("admin.media.loadimages")->with('allimage', $allimage); 

        $final_theme = $this->theme->theme();
        $result['commonContent'] = $this->index->commonContent();
     
      

        // $sel_query = "SELECT * from vendors";
         
        // $res_query = DBraw::select($sel_query);
        // $res_query = json_decode(json_encode($res_query), true);
        // if (count($res_query)) {
        //     foreach ($res_query as $res) {
    
            
              
        //         $productlist[] = array(
        //             'vendor_id' => $res['vendor_id'],
        //             'vendor_name' => $res['vendor_name'],
        //             'image' => $res['image'],
                  
        //         );
             
        //     }
        // } else {
        //     $productlist = array();
        // }
        
         return view("web.vendor_list", )->with('allimage', $allimage);
  
}






public function vendorproduct(Request $request, $jspid)
    {

        $Images = new Images();
        $allimage = $Images->vendorimages();
        // return view("admin.media.loadimages")->with('allimage', $allimage); 

        $final_theme = $this->theme->theme();
        $result['commonContent'] = $this->index->commonContent();
     
        return view('web.vendor_page')->with('allimage', $allimage);

        // $users = DB::select('select * from products');

        // $users = DB::select('SELECT vendors.vendor_id,	products.		products_slug, products.products_image
        // FROM products
        //  INNER JOIN vendors
        //  ON vendors.vendor_id = products.vendor_id');
        // return view('web.vendor_page',['users'=>$users]);


        // $id = $jspid;
        // $sel_query = "SELECT vendors.vendor_id,	products.	products_id, products.products_image
        // FROM products
        // INNER JOIN vendors
        // ON vendors.vendor_id = products.vendor_id";
        // ;
 

        // // $sel_query = "SELECT * from job_seeker where js_id=" . $jspid;
        // $res_query = DBraw::select($sel_query);
      
        // $res_query = json_decode(json_encode($res_query), true);

        // if (count($res_query)) {
        //     foreach ($res_query as $res) {
                
        //         $joblist = array(
        //             'products_image' => $res['products_image'],
        //             'vendor_id' => $res['vendor_id'],
        //             'products_id' => $res['products_id']
                 
        //         );
         
        //     }
        
        // } else {
        //     $joblist = array();
        // }
          
        // return view('web.vendor_page', compact(['joblist']));
    }













}