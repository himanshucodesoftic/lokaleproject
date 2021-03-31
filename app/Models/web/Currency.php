<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Currency extends Model
{
    public function getter(){
        $currencies = DB::table('currencies')->get();
        return $currencies;
      }
  
}
