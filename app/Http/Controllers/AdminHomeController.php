<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "Admin - Online Store";
        return view('admin.home.index')->with("viewData", $viewData);
    }

    
}
