<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    function index(){

        $trains = DB::table('trains')->get();
        
        return view('homepage',compact("trains"));
    }
}
