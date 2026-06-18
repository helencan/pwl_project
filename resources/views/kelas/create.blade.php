<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Tambah Kelas</h2>

    <form action="{{ route('kelas.store') }}" method="post">
        @csrf

        <table class="table table-bordered">

            <tr>
                <td>Kode Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="kode_kelas" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="kode_mata_kuliah" class="form-control" required>
                        <option value="">-- Pilih Mata Kuliah --</option>
                        @foreach ($mataKuliah as $mk)
                            <option value="{{ $mk->id }}">
                                {{ $mk->Nama_Mata_Kuliah }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Dosen Pengajar</td>
                <td>:</td>
                <td>
                    <select name="kode_dosen" class="form-control" required>
                        <option value="">-- Pilih Dosen --</option>
                        @foreach ($dosen as $d)
                            <option value="{{ $d->id }}">
                                {{ $d->Fullname }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Hari</td>
                <td>:</td>
                <td>
                    <select name="hari" class="form-control" required>
                        <option value="">-- Pilih Hari --</option>
                        @foreach ($hari as $h)
                            <option value="{{ $h }}">
                                {{ ucfirst($h) }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Jam</td>
                <td>:</td>
                <td>
                    <select name="jam" class="form-control" required>
                        <option value="">-- Pilih Jam --</option>
                        @foreach ($jam as $j)
                            <option value="{{ $j }}">
                                {{ $j }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <td>Tahun Ajaran</td>
                <td>:</td>
                <td>
                    <input type="text" name="tahun_ajaran" class="form-control" placeholder="2025/2026" required>
                </td>
            </tr>

            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>
                    <input type="radio" name="semester" value="ganjil" required>
                    Ganjil

                    <br>

                    <input type="radio" name="semester" value="genap">
                    Genap
                </td>
            </tr>

            <tr>
                <td>Ruang Kelas</td>
                <td>:</td>
                <td>
                    <input type="text" name="ruang_kelas" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td>Jumlah Maksimum</td>
                <td>:</td>
                <td>
                    <input type="number" name="jumlah_max" class="form-control" required>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <button type="reset" class="btn btn-secondary">
                        Reset
                    </button>
                </td>
            </tr>

        </table>

    </form>
</div>

</body>
</html>