<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Models\Core\Images;

use Carbon\Carbon;
use Exception;

use Image;
use Lang;

class BrandController extends Controller
{
    
    public function showbrands(Request $request )
    {
        $Images = new Images();
        $images = $Images->getimages();
       

        return view('brand')->with('images', $images);
    }
}
