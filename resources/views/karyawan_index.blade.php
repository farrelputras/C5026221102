@extends('master2')
@section('JudulHalaman', 'Data Karyawan')
@section('konten')

	<h3>Data Karyawan</h3>

	<br/>

	<table class="table table-striped table-hover">
		<tr style="text-align: center">
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodepegawai }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td align="center">{{ $p->divisi }}</td>
            <td align="center">{{ strtolower($p->departemen) }}</td>

			<td align="center">
                <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <a href="/karyawan/tambah" class="btn btn-primary mb-3 mt-2"> + Tambah Karyawan Baru</a>

@endsection
