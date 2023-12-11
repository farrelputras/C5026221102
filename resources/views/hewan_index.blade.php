@extends('master2')
@section('JudulHalaman', 'Data Hewan')
@section('konten')

	{{-- <h2>www.malasngoding.com</h2> --}}
	<h3>Data Hewan</h3>

	<a href="/hewan/tambah" class="btn btn-primary mb-3 mt-2"> + Tambah Hewan Baru</a>

	<br/>
    <p>Cari Data Hewan :</p>
    <form action="/hewan/cari" method="GET" class="mb-3">
        <div class="input-group">
            <input class= "form-control" type="text" name="cari" placeholder="Cari Nama Hewan .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">CARI</button>
            </div>
        </div>
    </form>
	<br/>

	<table class="table table-striped table-hover">
		<tr style="text-align: center">
			<th>Kode</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Ketersediaan</th>
			<th>Opsi</th>
		</tr>
		@foreach($hewan as $p)
		<tr>
			<td align="center">{{ $p->kodehewan }}</td>
			<td>{{ $p->namahewan }}</td>
			<td align="center">{{ $p->jumlahhewan }}</td>
            <td align="center">
                {{-- <div class="custom-checkbox"
                    style="border: 2px solid {{ $p->tersedia == 'T' ? 'green' : 'red' }}; border-radius: 10px">
                    <label for="customCheckbox {{$p->kodehewan}}"
                        style="color: {{$p->tersedia == 'T' ? 'green' : 'red' }};">
                        {{ $p->tersedia == 'T' ? 'T' : 'F' }}
                    </label>
                    <input type="checkbox" {{$p->tersedia == 'T' ? 'checked' : '' }} disabled
                        id="customCheckbox{{$p->kodehewan}}">
                    <label for="customCheckbox {{ $p->kodehewan }}">

                    </label>
                </div> --}}
                {{ $p->tersedia }}</td>

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
