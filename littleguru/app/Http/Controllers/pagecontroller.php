<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function welcome(){
        return view('welcome');
   }
   
   public function contact(){
       return view('contact');
   }

//     public function babymassage(){
//        return view('babymassage');
//     }

//    public function zwangerschapsyoga(){
//        return view('zwangerschapsyoga');
//    }
//    public function partnerlessen(){
//        return view('partnerlessen');
//    }
}
