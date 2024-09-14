<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    // Show the welcome page
    public function index()
    {
        return view("welcome");
    }

    // Show the product page
    public function home()
    {
        return view("product");
    }

    // Show the contact page
    public function contact()
    {
        return view("contact");
    }
}
