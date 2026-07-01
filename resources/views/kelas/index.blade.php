@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Data Kelas</h2>

    <a href="{{ route('kelas.create') }}" class="btn btn-primary mb-3">
        Tambah Kelas
    </a>


    <table class="table table-bordered">

        <thead>
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Nama Dosen</th>
                <th>Nama Mata Kuliah</th>
                <th>Ruang Kelas</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Tahun Ajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>


        <tbody>

        @foreach($kelas as $item)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>


                <td>
                    {{ $item->kode_kelas }}
                </td>


                <td>
                    {{ $item->dosen->Fullname ?? '-' }}
                </td>


                <td>
                    {{ $item->mataKuliah->Nama_Mata_Kuliah ?? '-' }}
                </td>


                <td>
                    {{ $item->ruang_kelas }}
                </td>


                <td>
                    {{ $item->hari }}
                </td>


                <td>
                    {{ $item->jam }}
                </td>


                <td>
                    {{ $item->tahun_ajaran }}
                </td>


                <td>

                    <a href="{{ route('kelas.edit', $item->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>


                    <form action="{{ route('kelas.destroy', $item->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Hapus data kelas?')">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @endforeach

        </tbody>

    </table>

</div>

@endsection