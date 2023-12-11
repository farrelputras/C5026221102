@extends('master2')
@section('JudulHalaman', 'Data Hewan')
@section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Data Hewan</h3>

	<a href="/hewan"> Kembali</a>

	<br/>
	<br/>

	<form action="/hewan/store" method="post">
		{{ csrf_field() }}
        {{-- NAMA --}}
		<div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
                <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan Nama Hewan">
            </div>
        </div>
        {{-- JUMLAH --}}
        <div class = "form-group row">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah</label>
            <div class = "col-sm-8">
                <input name="jumlah" type = "number" class = "form-control" id = "jumlah" placeholder = "Masukkan Jumlah Hewan">
            </div>
        </div>
        {{-- KETERSEDIAAN --}}
        <div class = "form-group row">
            <label for = "ketersediaan" class = "col-sm-2 control-label">Ketersediaan</label>
            <div class = "col-sm-8">
                <input name="ketersediaan" type = "text" class = "form-control" id = "ketersediaan" placeholder = "Masukkan Ketersediaan (V / -)">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

	</form>
@endsection
