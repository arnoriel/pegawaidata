<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function pegawaiManager()
    {
        $pegawai = Pegawai::all();
        return view('manajer.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai = new pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect()->route('pegawai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('pegawai.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         //validasi data
         $validated = $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai = pegawai::findOrFail($id);
        $pegawai->nama = $request->nama;
        $pegawai->telepon = $request->telepon;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
        return redirect()->route('pegawai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pegawai = pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }

    public function cetak_pdf()
    {
    	$pegawai = Pegawai::all();
 
    	$pdf = PDF::loadview('pegawai_pdf',['pegawai'=>$pegawai]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
}
