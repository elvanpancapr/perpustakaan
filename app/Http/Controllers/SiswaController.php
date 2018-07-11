<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Siswa;


class SiswaController extends Controller
{
    public function index(){
    	$halaman = 'siswa';
    	$siswa_list = Siswa::all()->sortBy('nama_siswa');
        $jumlah_siswa = $siswa_list->count();
    	return view('siswa.index', compact('halaman', 'siswa_list', 'jumlah_siswa'));
    }

    public function create(){
    	return view('siswa/create');
    }

    protected $request;

    public function __construct(Request $req){
    	$this->request = $req;
    }


    public function store(){
        $data = $this->request;
        $siswa = $data->all();
        return $siswa;
    }
}
