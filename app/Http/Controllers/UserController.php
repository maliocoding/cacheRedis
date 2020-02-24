<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    //

   public function index(){
   	 $query = Cache::remember("customer_all", 10 * 60, function () {  //customer_all nama cachce nya, “10 * 60” digunakan untuk menyimpan berapa lama cache di simpan (dalam satuan detik).
            return Customer::all();
        });
 
 		  echo "<li><b> Nama | Alamat | umur </b></li>";
        foreach ($query as $q) {
            echo "<li>{$q->nama} | {$q->alamat} | {$q->umur} </li>";
        }

    }

    public function getUser(){
     $query = Customer::all();
       echo "<li><b> Nama | Alamat | umur </b></li>";
        foreach ($query as $q) {
             echo "<li>{$q->nama} | {$q->alamat} | {$q->umur} </li>";
        }

    }
}
