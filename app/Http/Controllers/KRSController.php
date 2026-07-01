<?php

namespace App\Http\Controllers;

use App\Models\KRS;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class KRSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $krs = KRS::with('mahasiswa')->get();

        return view('krs.index', compact('krs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();

        return view('krs.create', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_mahasiswa' => 'required',
            'tahun_ajaran'  => 'required',
            'semester'      => 'required',
            'status'        => 'required',
            'total_sks'     => 'required|numeric',
        ]);

        KRS::create([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran'   => $request->tahun_ajaran,
            'semester'       => $request->semester,
            'status'         => $request->status,
            'total_sks'      => $request->total_sks,
        ]);

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $krs = KRS::with([
            'mahasiswa',
            'detail',
            'detail.kelas',
            'detail.kelas.dosen',
            'detail.kelas.mataKuliah'
        ])->findOrFail($id);

        return view('krs.show', compact('krs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KRS $kr)
    {
        $mahasiswa = Mahasiswa::all();

        return view('krs.edit', compact('kr', 'mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KRS $kr)
    {
        $request->validate([
            'kode_mahasiswa' => 'required',
            'tahun_ajaran'  => 'required',
            'semester'      => 'required',
            'status'        => 'required',
            'total_sks'     => 'required|numeric',
        ]);

        $kr->update([
            'kode_mahasiswa' => $request->kode_mahasiswa,
            'tahun_ajaran'   => $request->tahun_ajaran,
            'semester'       => $request->semester,
            'status'         => $request->status,
            'total_sks'      => $request->total_sks,
        ]);

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KRS $kr)
    {
        $kr->delete();

        return redirect()->route('krs.index')
            ->with('success', 'Data KRS berhasil dihapus.');
    }
}