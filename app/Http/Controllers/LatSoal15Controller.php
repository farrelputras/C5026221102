<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatSoal15Controller extends Controller
{
    public function index()
	{
    	// mengambil data dari table nilaikuliah
		$nilaikuliah = DB::table('nilaikuliah')->get();
        // $pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data nilaikuliah ke view index
		return view('latsoal15_index',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah nilaikuliah
	public function tambah()
	{

		// memanggil view tambah
		return view('latsoal15_tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'ID' => $request->id,
			'NRP' => $request->nrp,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->sks
		]);
		// alihkan halaman ke halaman latsoal15
		return redirect('/latsoal15');

	}

}
