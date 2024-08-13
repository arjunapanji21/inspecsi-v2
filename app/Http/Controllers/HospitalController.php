<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function hospitals(){
        $props = [
            'title' => "Hospitals",
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
        ];
        return view('hospitals', $props);
    }

    public function hospital_baru_simpan(Request $request){
        $data = $request->all();
        Hospital::create($data);
        return redirect()->route('hospitals')->with('success', 'Berhasil Menambahkan Rumah Sakit Baru!');
    }

    public function hospital_update($id, Request $request){
        $data = $request->all();
        $base = Hospital::find($id);
        $base->update($data);
        return redirect()->route('hospitals')->with('success', 'Berhasil Mengupdate Data Rumah Sakit!');
    }

    public function hospital_hapus($id){
        $base = Hospital::find($id);
        $base->delete();
        return redirect()->route('hospitals')->with('success', 'Berhasil Mengupdate Data Rumah Sakit!');
    }
}
