<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Microsoft\Graph\Model;

class DashboardController extends Controller
{
    public function index(){
        $viewData = $this->loadViewData();
        return view('pages.dashboard',$viewData);
    }
}
