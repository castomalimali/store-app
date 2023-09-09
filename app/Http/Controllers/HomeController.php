<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index function
    public function index(){
    $viewData= [];
    $viewData["title"] = "Home Page - Online Store";
    return view('home.index')->with("viewData", $viewData);
    }

    // function about
    public function about(){
        $viewData= [];
        $viewData["title"] = "About Page - Online Store";
        $viewData["subtitle"] = "About";
        $viewData["description"] = "This is about us page";
        $viewData["author"] = "Developed by: Casto";

        return view('home.about')->with("viewData", $viewData);
    }
}
