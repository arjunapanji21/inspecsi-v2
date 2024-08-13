<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\CatatanPerkembanganPasien;
use App\Models\DataAssessment;
use App\Models\InstrumenPenilaian;
use App\Models\KategoriMasalahKeperawatan;
use App\Models\MasalahKeperawatan;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function submit_an_assessment(Request $request){
        $request->validate([
            'assessment_date' => 'required',
            'katim_id' => 'required',
        ]);
        $data = $request->all();
        $assessment_id = Assessment::create($data)->id;
        DataAssessment::create([
            'assessment_id' => $assessment_id,
        ])->id;
        InstrumenPenilaian::create([
            'assessment_id' => $assessment_id,
            'karu_id' => $request['karu_id'],
            'katim_id' => $request['katim_id'],
        ])->id;
        return redirect()->route('assessments')->with('success', 'Berhasil membuat assessment!');
    }

    public function data_pasien($id){
        if(auth()->user()->role == "Ketua Tim"){
            $props = [
                'title' => "Data Pasien",
                'data_pasien' => DataAssessment::find($id),
                'kategori_masalah' => KategoriMasalahKeperawatan::all(),
            ];
            return view('assessment/data_pasien', $props);
        }
        else {
            $data_pasien = DataAssessment::find($id);
            $diagnosa = [];
            foreach(MasalahKeperawatan::all() as $row){
                foreach(explode("#", $data_pasien->masalah_keperawatan) as $kode){
                    if($kode == $row->kode){
                        array_push($diagnosa, $row);
                    }
                }
            }
            $props = [
                'title' => "Data Pasien",
                'data_pasien' => $data_pasien,
                'diagnosa' => $diagnosa,
            ];
            return view('assessment/data_pasien', $props);
        }
    }

    public function data_pasien_submit($id, Request $request){
        $form = $request->all();
        $form['masalah_keperawatan'] = implode('#', $form['masalah_keperawatan']);
        $data = DataAssessment::find($id);
        $data->update($form);
        $assessment = Assessment::find($data->assessment_id);
        $assessment->finished_at = now();
        $assessment->save();
        
        return redirect()->route('assessments')->with('success', '
        Data assessment berhasil di simpan!');
    }

    public function perkembangan_pasien($id){
        $data_assessment = DataAssessment::find($id);
        $diagnosa = [];
        foreach(explode("#", $data_assessment->masalah_keperawatan) as $kode){
            $masalah_keperawatan = MasalahKeperawatan::where('kode', $kode)->first();
            array_push($diagnosa, $masalah_keperawatan);
        }
        $props = [
            'title' => "Catatan Perkembangan Pasien",
            'diagnosa' => $diagnosa,
            'data_assessment' => $data_assessment,
            'perkembangan_pasien' => CatatanPerkembanganPasien::where('data_assessment_id', $data_assessment->id)->get()
        ];
        return view('assessment/perkembangan_pasien', $props);
    }

    public function perkembangan_pasien_submit($id, Request $request){
        $form = $request->all();
        $form['data_assessment_id'] = $id;
        $form['user_id'] = auth()->user()->id;
        CatatanPerkembanganPasien::create($form);
        
        return redirect()->route('perkembangan_pasien', $id)->with('success', '
        Data assessment berhasil di simpan!');
    }

    public function penilaian($id){
        $props = [
            'title' => "Instrumen Penilaian Supervisi",
            'assessment' => Assessment::find($id),
            'penilaian' => InstrumenPenilaian::where('assessment_id', $id)->latest()->first(),
        ];
        return view('assessment/penilaian', $props);
    }

    public function penilaian_submit($id, Request $request){
        $form = $request->all();
        $assessment = Assessment::find($id);
        $assessment->score = $request['score'];
        $assessment->save();
        $form['assessment_id'] = $assessment->id;
        $form['karu_id'] = $assessment->karu_id;
        $form['katim_id'] = $assessment->katim_id;
        $penilaian = InstrumenPenilaian::where('assessment_id', $assessment->id)->get()->first();
        if($penilaian != null){
            $penilaian->update($form);
        }else{
            InstrumenPenilaian::create($form);
        }
        
        return redirect()->route('penilaian', $id)->with('success', '
        Data assessment berhasil di simpan!');
    }

    public function assessment_delete($id){
        $assessment = Assessment::find($id);
        $penilaian = InstrumenPenilaian::where('assessment_id', $assessment->id)->first();
        $penilaian->delete();
        $data_assessment = DataAssessment::where('assessment_id', $assessment->id)->first();
        $data_assessment->delete();
        $assessment->delete();
        
        return redirect()->route('assessments')->with('success', '
        Assessment berhasil di hapus!');
    }
}
