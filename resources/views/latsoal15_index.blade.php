@extends('latsoal15_master')
@section('JudulHalaman', 'Data Pegawai')
@section('konten')

	<h3>Nilai Kuliah</h3>

	<a href="/latsoal15/latsoal15_tambah" class="btn btn-primary"> + Tambah Data Baru</a>

	{{-- <br/>
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class= "form-control" type="text" name="cari" placeholder="Cari Nama Pegawai .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class = "btn btn-info" type="submit" value="CARI">
    </form>
	<br/> --}}

	<table class="table table-striped table-hover">
		<tr>
			<th class="text-center">ID</th>
			<th class="text-center">NRP</th>
			<th class="text-center">Nilai Angka</th>
			<th class="text-center">SKS</th>
			<th class="text-center">Nilai Huruf</th>
            <th class="text-center">Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td align="center">{{ $p->ID }}</td>
			<td align="center">{{ $p->NRP }}</td>
			<td align="center">{{ $p->NilaiAngka }}</td>
			<td align="center">{{ $p->SKS }}</td>
			{{-- <td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-primary">View</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td> --}}
            <td align="center">
                @if ($p->NilaiAngka <= 40)
                        D
                    @elseif ($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60)
                        C
                    @elseif ($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
            </td>
            <td align="center">
                {{$p->NilaiAngka * $p->SKS}}
            </td>
		</tr>
		@endforeach
	</table>

    {{-- {{$nilaikuliah->links()}} --}}


@endsection
