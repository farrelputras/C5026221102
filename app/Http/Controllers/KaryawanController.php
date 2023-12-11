<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class KaryawanController extends Controller
{
    public function index()
	{
    	// mengambil data dari table karyawan
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
		return view('karyawan_index',['karyawan' => $karyawan]);

	}

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('karyawan_tambah');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
        // //beri variabel untuk wadah data
        // $kode1 = 0;

        // //cari data di database
        // $kode2 = $request->kode;
        // if (DB::table('karyawan')->where('kodepegawai', $kode2)->get()) {
        //     $kode1 = $kode2;
        // }

        $request->validate([
            'kodepegawai' => Rule::unique('karyawan', 'kodepegawai'),
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        //insert data ke tabel
        DB::table('karyawan')->insert([
        'kodepegawai' => $request->kode,
        'namalengkap' => $request->nama,
        'divisi' => $request->divisi,
        'departemen' => $request->departemen
        ]);

            // alihkan halaman ke halaman karyawan
            return redirect('/karyawan');

	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman karyawan
		return redirect('/karyawan');
	}

}
