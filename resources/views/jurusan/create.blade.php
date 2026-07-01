<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Jurusan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h3>Tambah Data Jurusan</h3>

    <form action="{{ route('jurusan.store') }}" method="POST">

        @csrf

        <table class="table table-dark table-striped-columns">

            <tr>
                <td>Kode Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="Kode_Jurusan" class="form-control">
                </td>
            </tr>

            <tr>
                <td>Nama Jurusan</td>
                <td>:</td>
                <td>
                    <input type="text" name="Nama_Jurusan" class="form-control">
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                    <a href="{{ route('jurusan.index') }}" class="btn btn-danger">Back</a>
                </td>
            </tr>

        </table>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>