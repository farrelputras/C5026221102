<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HewanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table hewan
		// $hewan = DB::table('hewan')->get();
        $hewan = DB::table('hewan')->paginate(10);

    	// mengirim data hewan ke view index
		return view('hewan_index',['hewan' => $hewan]);

	}

	// method untuk menampilkan view form tambah hewan
	public function tambah()
	{

		// memanggil view tambah
		return view('hewan_tambah');

	}

	// method untuk insert data ke table hewan
	public function store(Request $request)
	{
		// insert data ke table hewan
		DB::table('hewan')->insert([
            'kodehewan' => $request->kode,
			'namahewan' => $request->nama,
			'jumlahhewan' => $request->jumlah,
            'tersedia' => $request->ketersediaan
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');

	}

	// method untuk edit data hewan
	public function edit($kode)
	{
		// mengambil data hewan berdasarkan kode yang dipilih
		$hewan = DB::table('hewan')->where('kodehewan',$kode)->get();
		// passing data hewan yang didapat ke view edit.blade.php
		return view('hewan_edit',['hewan' => $hewan]);

	}

	// update data hewan
	public function update(Request $request)
	{
		// update data hewan
		DB::table('hewan')->where('kodehewan',$request->kode)->update([
			'kodehewan' => $request->kode,
			'namahewan' => $request->nama,
			'jumlahhewan' => $request->jumlah,
			'tersedia' => $request->ketersediaan
		]);
		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
	}

	// method untuk hapus data hewan
	public function hapus($kode)
	{
		// menghapus data hewan berdasarkan kode yang dipilih
		DB::table('hewan')->where('kodehewan',$kode)->delete();

		// alihkan halaman ke halaman hewan
		return redirect('/hewan');
	}

    //method untuk mencari data hewan
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        // mengambil data dari table hewan sesuai pencarian data
        $hewan = DB::table('hewan')
            ->where('namahewan', 'like', "%".$cari."%")
            ->paginate();

            return view('hewan_index', ['hewan' => $hewan]);
    }

    // method untuk edit data hewan
    public function view($kode)
    {
        // mengambil data hewan berdasarkan kode yang dipilih
        $hewan = DB::table('hewan')
            ->where('kodehewan',$kode)
            ->get();
        // passing data hewan yang didapat ke view edit.blade.php
        return view('hewan_view',['hewan' => $hewan]);

    }
}
