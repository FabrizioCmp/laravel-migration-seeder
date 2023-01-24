<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    function index(){
        $currentDay = new Datetime('now', new DateTimeZone('Europe/Rome'));

        $trains = DB::table('trains')
        ->where("orario_di_partenza", ">=",$currentDay )
        ->get();
        
        return view('homepage',compact("trains"));
    }
}
