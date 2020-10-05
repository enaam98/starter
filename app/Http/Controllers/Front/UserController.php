<?php

namespace App\Http\Controllers\Front;//front =namespace

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserName(){
        return 'i am enaam';
    }
    
    public function getIndex(){
        $data=['ahmed', 'lama'];
        return view('welcome',compact('data'));
    }
}
