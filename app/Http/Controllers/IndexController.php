<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$halaman = 'index';
    	return view('pages/index', compact('halaman'));
    }
}
