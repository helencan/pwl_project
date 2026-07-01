@extends('layouts.app')

@section('content')

<h3>Tambah Mata Kuliah</h3>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <table class="table table-dark table-striped-columns">

        <tr>
            <td>Jurusan Id</td>
            <td>:</td>
            <td>
                <input type="text" name="Jurusan_Id" class="form-control">
            </td>
        </tr>

        <tr>
            <td>Kode Mata Kuliah</td>
            <td>:</td>
            <td>
                <input type="text" name="Kode_Mata_Kuliah" class="form-control">
            </td>
        </tr>

        <tr>
            <td>Nama Mata Kuliah</td>
            <td>:</td>
            <td>
                <input type="text" name="Nama_Mata_Kuliah" class="form-control">
            </td>
        </tr>

        <tr>
            <td>SKS</td>
            <td>:</td>
            <td>
                <input type="number" name="SKS" class="form-control">
            </td>
        </tr>

        <tr>
            <td>Dosen Id</td>
            <td>:</td>
            <td>
                <input type="text" name="Dosen_Id" class="form-control">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="reset" class="btn btn-secondary">Clear</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-danger">Back</a>
            </td>
        </tr>

    </table>

</form>

@endsection