<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MirrorFormController extends Controller
{
    public function index(){
        return view('pages.mirorform');
    }
}
