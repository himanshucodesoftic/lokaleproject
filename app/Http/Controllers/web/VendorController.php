<?php

namespace App\Http\Controllers\web;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB as Dbraw;
class VendorController extends Controller
{
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
$vendor_id=$request->input('vendor_id');
$role_type=$request->input('role_type');

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
        'role_id'=>$role_type,
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
                    'id'=>'id',
                    'vendor_name' => $res['vendor_name'],
                    'vendor_name_arabic' => $res['vendor_name_arabic'],
                    'image' => $res['image'],
                   
                 

                );
            }
        } else {
            $productlist = array();
        }
        
         return view("web.vendor_list",  compact(['productlist']));
  
}



public function vendorproduct(Request $request)
{
 
    try {

$sel_query="SELECT vendors.vendor_id, products.products_image
FROM vendors
INNER JOIN products ON vendors.vendor_id = products.vendor_id;";

       
        $res_query = DBraw::select($sel_query);
    
        $res_query = json_decode(json_encode($res_query), true);
        if (count($res_query)) {
            $res = $res_query[0];
           
        }

        $jp_obj = array(
            'vendor_id' => $res['vendor_id'],
     'products_image'=>$res['products_image']
        );

     
        return view("web.vendor_page",compact(['jp_obj']));
  
    } catch (\Exception $ex) {
        dd($ex);

        error_log('exception' . $ex->getMessage());
    }
}













}
