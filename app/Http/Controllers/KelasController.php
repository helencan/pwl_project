<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    // Halaman index
    public function index()
    {
        $kelas = Kelas::with(['dosen', 'matakuliah'])->get();

        return view('kelas.index', compact('kelas'));
    }


    // Form tambah kelas
    public function create()
    {
        $dosen = Dosen::all();
        $matakuliah = Matakuliah::all();


        // HARUS SAMA DENGAN DATABASE ENUM
        $hari = [
            'senin',
            'selasa',
            'rabu',
            'kamis',
            'jumat'
        ];


        // HARUS SAMA DENGAN DATABASE ENUM
        $jam = [
            '08:00 - 09:40',
            '09:50 - 11:30',
            '12:30 - 14:10',
            '17:00 - 18:40',
            '19:00 - 20:40'
        ];


        return view('kelas.create', compact(
            'dosen',
            'matakuliah',
            'hari',
            'jam'
        ));
    }



    // Simpan data kelas
    public function store(Request $request)
    {

        $request->validate([

            'kode_kelas' => 'required',

            'kode_mata_kuliah' => 'required',

            'kode_dosen' => 'required',

            'hari' => 'required',

            'jam' => 'required',

            'tahun_ajaran' => 'required',

            'ruang_kelas' => 'required',

            'jumlah_max' => 'required',

            'semester' => 'required',

        ]);



        Kelas::create([

            'kode_kelas' => $request->kode_kelas,

            'kode_mata_kuliah' => $request->kode_mata_kuliah,

            'kode_dosen' => $request->kode_dosen,

            'hari' => $request->hari,

            'jam' => $request->jam,

            'tahun_ajaran' => $request->tahun_ajaran,

            'ruang_kelas' => $request->ruang_kelas,

            'jumlah_max' => $request->jumlah_max,

            'semester' => $request->semester,

        ]);



        return redirect('/kelas')
            ->with('success','Data kelas berhasil ditambahkan');

    }



    // Hapus data
    public function destroy($id)
    {

        Kelas::findOrFail($id)->delete();


        return redirect('/kelas')
            ->with('success','Data kelas berhasil dihapus');

    }

}