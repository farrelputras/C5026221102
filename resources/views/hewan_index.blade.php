@extends('master2')
@section('JudulHalaman', 'Data Hewan')
@section('konten')

	{{-- <h2>www.malasngoding.com</h2> --}}
	<h3>Data Hewan</h3>

	<a href="/hewan/tambah" class="btn btn-primary"> + Tambah Hewan Baru</a>

	<br/>
    <p>Cari Data Hewan :</p>
    <form action="/hewan/cari" method="GET">
        <input class= "form-control" type="text" name="cari" placeholder="Cari Nama Hewan .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class = "btn btn-info" type="submit" value="CARI">
    </form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th class="text-center">Kode</th>
			<th class="text-center">Nama</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Ketersediaan</th>
			<th class="text-center">Opsi</th>
		</tr>
		@foreach($hewan as $p)
		<tr>
			<td align="center">{{ $p->kodehewan }}</td>
			<td>{{ $p->namahewan }}</td>
			<td align="center">{{ $p->jumlahhewan }}</td>
            <td align="center">{{ $p->tersedia }}</td>

			{{-- <td>
                @if ($p->jumlahhewan > 0)
                V
                @else
                X
                @endif
            </td> --}}
			<td align="center">
                <a href="/hewan/view/{{ $p->kodehewan }}" class="btn btn-primary">View</a>
                |
				<a href="/hewan/edit/{{ $p->kodehewan }}" class="btn btn-warning">Edit</a>
				|
				<a href="/hewan/hapus/{{ $p->kodehewan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$hewan->links()}}


@endsection
