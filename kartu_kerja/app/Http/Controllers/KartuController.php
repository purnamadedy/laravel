<?php

namespace App\Http\Controllers;

use App\Kartu;
use Illuminate\Http\Request;
use App\Http\Requests\KartuRequest;

class KartuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu = Kartu::all();
        return view('admin.tampil', compact('kartu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KartuRequest $request)
    {
        $kartu = $request->all();
        $kartu['foto'] = $request->file('foto')->store('assets/gallery', 'public');

        Kartu::create($kartu);
        return redirect()->route('kartu.index')->with('status', 'Data Peserta Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function show(Kartu $kartu)
    {
        return view('admin.show', compact('kartu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function edit(Kartu $kartu)
    {
        return view('admin.edit', compact('kartu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kartu $kartu)
    {
        // $kartu = $request->all();
        // $kartu['foto'] = $request->file('foto')->store('assets/gallery', 'public');

        // $kartu = Kartu::findOrfail($kartu);
        // $kartu->update($data);

        Kartu::where('id', $kartu->id)
            ->update([

            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nama_ortu' => $request->nama_ortu,
            'nominal' => $request->nominal,
            'program' => $request->program,
            // 'foto' => $request->file('foto')->store('assets/gallery', 'public')

        ]);
        return redirect ('/kartu')->with('status', 'Data Barang Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kartu  $kartu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kartu $kartu)
    {
        Kartu::destroy($kartu->id);
        return redirect('/kartu')->with('status', 'Data Peserta Berhasil Di Hapus');
    }
}
