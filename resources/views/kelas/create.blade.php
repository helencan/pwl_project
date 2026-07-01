@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Kelas</h3>

<form action="{{ route('kelas.store') }}" method="POST">

@csrf

<div class="mb-3">
<label>Kode Kelas</label>
<input type="text" name="kode_kelas" class="form-control">
</div>

<div class="mb-3">
<label>Mata Kuliah</label>

<select name="kode_mata_kuliah" class="form-control">

@foreach($matakuliah as $mk)

<option value="{{ $mk->id }}">
{{ $mk->Nama_Mata_Kuliah }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Dosen</label>

<select name="kode_dosen" class="form-control">

@foreach($dosen as $d)

<option value="{{ $d->id }}">
{{ $d->Fullname }}
</option>

@endforeach

</select>

</div>

<div class="mb-3">

<label>Hari</label>

<select name="hari" class="form-control">

<option>Senin</option>
<option>Selasa</option>
<option>Rabu</option>
<option>Kamis</option>
<option>Jumat</option>
<option>Sabtu</option>

</select>

</div>

<div class="mb-3">

<label>Jam</label>

<select name="jam" class="form-control">

<option>07:00 - 08:40</option>
<option>08:50 - 10:30</option>
<option>10:40 - 12:20</option>
<option>13:00 - 14:40</option>
<option>14:50 - 16:30</option>

</select>

</div>

<div class="mb-3">
<label>Tahun Ajaran</label>
<input type="text" name="tahun_ajaran" class="form-control">
</div>

<div class="mb-3">

<label>Semester</label>

<select name="semester" class="form-control">

<option value="ganjil">Ganjil</option>
<option value="genap">Genap</option>

</select>

</div>

<div class="mb-3">
<label>Ruang Kelas</label>
<input type="text" name="ruang_kelas" class="form-control">
</div>

<div class="mb-3">
<label>Jumlah Maksimal</label>
<input type="number" name="jumlah_max" class="form-control">
</div>

<button class="btn btn-primary">
Simpan
</button>

<a href="{{ route('kelas.index') }}" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

@endsection