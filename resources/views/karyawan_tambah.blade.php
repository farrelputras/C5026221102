@extends('master2')
@section('JudulHalaman', 'Data Karyawan')
@section('konten')

	<h3>Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post">
        @if ($message = Session::get('dupe'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
      @endif


		{{ csrf_field() }}
        {{-- KODE --}}
		<div class = "form-group row">
            <label for = "kode" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-8">
                <input name="kode" type = "text" class = "form-control" id = "kode" placeholder = "Masukkan Kode Pegawai">
            </div>
        </div>

        {{-- NAMA LENGKAP --}}
		<div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama Lengkap</label>
            <div class = "col-sm-8">
                <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Lengkap">
            </div>
        </div>

        {{-- DIVISI --}}
		<div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
            <div class = "col-sm-8">
                <input name="divisi" type = "text" class = "form-control" id = "divisi" placeholder = "Masukkan Divisi">
            </div>
        </div>

        {{-- DEPARTEMEN --}}
		<div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 control-label">Departemen</label>
            <div class = "col-sm-8">
                <input name="departemen" type = "text" class = "form-control" id = "departemen" placeholder = "Masukkan Departemen">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

	</form>
@endsection
