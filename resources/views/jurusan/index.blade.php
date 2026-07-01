<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Jurusan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <a href="{{ route('jurusan.create') }}">
        <input type="button" value="Create" class="btn btn-primary mb-3">
    </a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Jurusan</th>
                <th>Nama Jurusan</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        @foreach ($jurusan as $j)

            <tr>

                <td>{{ $j->id }}</td>
                <td>{{ $j->Kode_Jurusan }}</td>
                <td>{{ $j->Nama_Jurusan }}</td>
                <td>{{ $j->created_at }}</td>

                <td>

                    <a href="{{ route('jurusan.edit', $j->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('jurusan.destroy', $j->id) }}" method="POST" style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            Delete
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>