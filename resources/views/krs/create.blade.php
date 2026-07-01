<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah KRS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h3 class="mb-4">Tambah KRS</h3>

    <form action="{{ route('krs.store') }}" method="POST">

        @csrf

        <table class="table table-bordered">

            <tr>
                <td width="200">Mahasiswa</td>
                <td>
                    <select name="kode_mahasiswa" class="form-control">

                        <option value="">
                            -- Pilih Mahasiswa --
                        </option>

                        @foreach($mahasiswa as $mhs)

                        <option value="{{ $mhs->id }}">
                            {{ $mhs->Fullname }} ({{ $mhs->NIM }})
                        </option>

                        @endforeach

                    </select>
                </td>
            </tr>

            <tr>
                <td>Tahun Ajaran</td>
                <td>
                    <input
                        type="text"
                        name="tahun_ajaran"
                        class="form-control"
                        placeholder="2025/2026">
                </td>
            </tr>

            <tr>
                <td>Semester</td>
                <td>

                    <select
                        name="semester"
                        class="form-control">

                        <option value="ganjil">
                            Ganjil
                        </option>

                        <option value="genap">
                            Genap
                        </option>

                    </select>

                </td>
            </tr>

            <tr>
                <td>Status</td>
                <td>

                    <select
                        name="status"
                        class="form-control">

                        <option value="pending">
                            Pending
                        </option>

                        <option value="approved">
                            Approved
                        </option>

                        <option value="partial">
                            Partial
                        </option>

                        <option value="declined">
                            Declined
                        </option>

                    </select>

                </td>
            </tr>

            <tr>
                <td>Total SKS</td>
                <td>
                    <input
                        type="number"
                        name="total_sks"
                        class="form-control">
                </td>
            </tr>

            <tr>
                <td colspan="2">

                    <button
                        type="submit"
                        class="btn btn-primary">
                        Simpan
                    </button>

                    <a
                        href="{{ route('krs.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                </td>
            </tr>

        </table>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>