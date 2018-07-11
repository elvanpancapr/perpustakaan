<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
    	$halaman = 'about';
    	return view('pages/about', compact('halaman'));
    }

    public function login(){
    	$halaman = 'login';
    	return view('admin/login', compact('halaman'));
    }

    public function header(){
    	$halaman = 'header';
    	return view('admin/aaa', compact('halaman'));
    }
}
