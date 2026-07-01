@extends('layouts.app')

@section('content')

<a href="{{ route('mahasiswa.create') }}">
    <input type="button" value="Create">
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>NISN</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($mahasiswa as $m)
        <tr>
            <td>{{ $m->id }}</td>
            <td>{{ $m->Fullname }}</td>
            <td>{{ $m->NIM }}</td>
            <td>{{ $m->NIDN }}</td>
            <td>{{ $m->Tempat_Lahir }}</td>
            <td>{{ $m->Tanggal_Lahir }}</td>
            <td>{{ $m->Alamat }}</td>
            <td>{{ $m->created_at }}</td>
            <td>
                <a href="{{ route('mahasiswa.edit', $m->id) }}">
                    <input type="button" value="Edit">
                </a>

                <form action="{{ route('mahasiswa.destroy', $m->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection