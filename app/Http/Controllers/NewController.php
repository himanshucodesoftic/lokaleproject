<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use DB as Dbraw;

class NewController extends Controller
{

   

    public function index()
    {

     



        $sel_query = "SELECT * from vendors";
         
        $res_query = DBraw::select($sel_query);
        $res_query = json_decode(json_encode($res_query), true);
        if (count($res_query)) {
            foreach ($res_query as $res) {
    
            
              
                $productlist[] = array(
                    'vendor_id' => $res['vendor_id'],
                    'vendor_name' => $res['vendor_name'],
                    'image' => $res['image'],
                  
                );
             
            }
        } else {
            $productlist = array();
        }
         return view("web.vendor_list", ['productlist'=>$productlist]);
  
}
}