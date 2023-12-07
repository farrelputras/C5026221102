@extends('latsoal15_master')
@section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Nilai Kuliah</h3>

	<a href="/latsoal15"> Kembali</a>

	<br/>
	<br/>

	<form action="/latsoal15/latsoal15_store" method="post">
		{{ csrf_field() }}
        {{-- ID --}}
		{{-- <div class = "form-group row">
            <label for = "id" class = "col-sm-2 control-label">ID</label>
            <div class = "col-sm-8">
                <input name="id" type = "text" class = "form-control" id = "id" placeholder = "Masukkan ID">
            </div>
        </div> --}}
        {{-- NRP --}}
        <div class = "form-group row">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
                <input name="nrp" type = "text" class = "form-control" id = "nrp" placeholder = "Masukkan NRP">
            </div>
        </div>
        {{-- Nilai Angka --}}
        <div class = "form-group row">
            <label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
                <input name="nilaiangka" type = "number" class = "form-control" id = "nilaiangka" placeholder = "Masukkan Nilai Angka">
            </div>
        </div>
        {{-- SKS --}}
        <div class = "form-group row">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
                <input name="sks" type = "text" class = "form-control" id = "sks" placeholder = "Masukkan SKS">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

	</form>
@endsection
