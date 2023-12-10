@extends('master2')
@section('JudulHalaman', 'Data Hewan')

    @section('konten')
	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Lihat Data Hewan</h3>

	<br/>

    @foreach($hewan as $p)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">
                {{-- KODE --}}
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 control-label">Kode:</label>
                    <div class="col-sm-8">
                        <input type="number" readonly class="form-control" id="kode" value="{{ $p->kodehewan }}">
                    </div>
                </div>
                {{-- NAMA --}}
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 control-label">Nama:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="nama" value="{{ $p->namahewan }}">
                    </div>
                </div>
                {{-- JUMLAH --}}
                <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 control-label">Jumlah:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="jumlah" value="{{ $p->jumlahhewan }}">
                    </div>
                </div>
                {{-- KETERSEDIAAN --}}
                <div class="form-group row">
                    <label for="ketersediaan" class="col-sm-2 control-label">Ketersediaan:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="ketersediaan" value="{{ $p->tersedia }}">
                    </div>
                </div>

                <div class="col-sm-2 align-items-center mx-auto">
                    <a href="/hewan" class="btn btn-primary col-sm-8">OK</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    @endsection
