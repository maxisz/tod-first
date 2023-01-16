<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Room extends Controller
{
   
 public function index(Request $request,$session_code){
  
    // $users = DB::table('room_users')->where('session_code',$session_code)->get();
    
    
    return view('tod.room');
  
 }   
   
//
}
