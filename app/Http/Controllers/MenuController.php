<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
    	$halaman = 'index';
    	return view('MenuAdmin.index', compact('halaman'));
    }

    public function transaksi(){
    	$halaman = 'transaksi';
    	return view('MenuAdmin.transaksi', compact('halaman'));
    }

    public function buku(){
    	$halaman = 'buku';
    	return view('MenuAdmin.data_buku', compact('halaman'));
    }

    public function anggota(){
    	$halaman = 'anggota';
    	return view('MenuAdmin/data_anggota', compact('halaman'));
    }

    public function referensi(){
    	$halaman = 'referensi';
    	return view('MenuAdmin/referensi', compact('halaman'));
    }

    public function konfigurasi(){
    	$halaman = 'konfigurasi';
    	return view('MenuAdmin/konfigurasi', compact('halaman'));
    }
}