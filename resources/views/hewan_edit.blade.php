@extends('master2')
@section('JudulHalaman', 'Data Hewan')
@section('konten')

	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Edit Data Hewan</h3>

	<a href="/hewan"> Kembali</a>

	<br/>
	<br/>

	@foreach($hewan as $p)
	<form action="/hewan/update" method="post">
		{{ csrf_field() }}
		{{-- KODE --}}
          <div class = "form-group row">
            <label for = "kode" class = "col-sm-2 control-label">Kode</label>
            <div class = "col-sm-8">
                <input type = "number" required="required" class = "form-control" id = "kode" name = "kode" value = "{{ $p->kodehewan }}">
            </div>
        </div>
        {{-- NAMA --}}
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
                <input type = "text" required="required" class = "form-control" id = "nama" name = "nama" value="{{ $p->namahewan }}">
            </div>
        </div>
        {{-- JUMLAH --}}
        <div class = "form-group row">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah</label>
            <div class = "col-sm-8">
                <input type = "number" required="required" class = "form-control" id = "jumlah" name = "jumlah" value="{{ $p->jumlahhewan }}">
            </div>
        </div>
        {{-- KETERSEDIAAN --}}
        <div class = "form-group row">
            <label for = "ketersediaan" class = "col-sm-2 control-label">Ketersediaan</label>
            <div class = "col-sm-8">
               <input type = "text" required="required" class = "form-control" id = "ketersediaan" name = "ketersediaan" value="{{ $p->tersedia }}">
            </div>
        </div>

        <div class="col-sm-2 align-items-center mx-auto">
            <input type="submit" class="btn btn-primary" value="Simpan">
        </div>

    </form>
    @endforeach
@endsection
