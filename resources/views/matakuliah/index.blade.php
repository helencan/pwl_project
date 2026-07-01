@extends('layouts.app')

@section('content')

<a href="{{ route('matakuliah.create') }}">
    <input type="button" value="Create" class="btn btn-primary mb-3">
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Jurusan Id</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Dosen Id</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($matakuliah as $mk)
        <tr>
            <td>{{ $mk->id }}</td>
            <td>{{ $mk->Jurusan_Id }}</td>
            <td>{{ $mk->Kode_Mata_Kuliah }}</td>
            <td>{{ $mk->Nama_Mata_Kuliah }}</td>
            <td>{{ $mk->SKS }}</td>
            <td>{{ $mk->Dosen_Id }}</td>
            <td>{{ $mk->created_at }}</td>

            <td>
                <a href="{{ route('matakuliah.edit', $mk->id) }}">
                    <input type="button" value="Edit" class="btn btn-warning btn-sm">
                </a>

                <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

@endsection