<?php

namespace App\Http\Controllers;

use App\Models\KategoriMasalahKeperawatan;
use App\Models\MasalahKeperawatan;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    public function diagnosa(){
        $props = [
            'title' => "Diagnosa & Intervensi",
            'diagnosa' => MasalahKeperawatan::orderBy('kode', 'asc')->get(),
        ];
        return view('diagnosa', $props);
    }

    public function diagnosa_baru(){
        $props = [
            'title' => "Tambah Diagnosa Masalah Keperawatan",
            'kategori_masalah_keperawatan' => KategoriMasalahKeperawatan::all(),
        ];
        return view('diagnosa-baru', $props);
    }

    public function diagnosa_baru_simpan(Request $request){
        $data = $request->all();
        MasalahKeperawatan::create($data);
        return redirect()->route('diagnosa')->with('success', 'Diagnosa berhasil disimpan!');
    }

    public function diagnosa_edit($id){
        $props = [
            'title' => "Diagnosa & Intervensi",
            'kategori_masalah_keperawatan' => KategoriMasalahKeperawatan::all(),
            'masalah_keperawatan' => MasalahKeperawatan::find($id),
        ];
        return view('diagnosa-edit', $props);
    }

    public function diagnosa_update($id, Request $request){
        $data = $request->all();
        $diagnosa = MasalahKeperawatan::find($id);
        $diagnosa->update($data);
        return redirect()->route('diagnosa')->with('success', 'Diagnosa berhasil di update!');
    }

    public function diagnosa_hapus($id){
        $diagnosa = MasalahKeperawatan::find($id);
        $diagnosa->delete();
        return redirect()->route('diagnosa')->with('success', 'Diagnosa berhasil di hapus!');
    }
}
