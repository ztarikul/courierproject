<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    public function shipment(){
        return view('shipment');
    }

    public function add_new_shipment(){
        return view('addnewshipment');
    }

    public function preview_print(){
        return view('preview');
    }
}
