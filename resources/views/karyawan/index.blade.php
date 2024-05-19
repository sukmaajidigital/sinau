@extends('layouts.main')
@section('container')
<body>
    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal Lahir</th>
                        <th>Tanggal Rekrut</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Gaji</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $karyawans)
                    <tr>
                        <td>{{ $karyawans->id_karyawan }}</td>
                        <td>{{ $karyawans->nama_karyawan }}</td>
                        <td>{{ $karyawans->tgl_lahir }}</td>
                        <td>{{ $karyawans->tgl_rekrut }}</td>
                        <td>{{ $karyawans->jabatan }}</td>
                        <td>{{ $karyawans->divisi }}</td>
                        <td>{{ $karyawans->gaji }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
@endsection