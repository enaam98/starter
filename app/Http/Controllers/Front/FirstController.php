<?php

namespace App\Http\Controllers\Front;//front is namespace

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function showString(){
        return 'static';
    }
}
