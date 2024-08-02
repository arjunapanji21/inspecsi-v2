<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\CatatanPerkembanganPasien;
use App\Models\DataAssessment;
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
        return redirect()->route('assessments')->with('success', '
        Berhasil membuat assessment!');
    }

    public function data_pasien($id){
        $props = [
            'title' => "Data Pasien",
            'data_pasien' => DataAssessment::find($id)
        ];
        return view('assessment/data_pasien', $props);
    }

    public function data_pasien_submit(Request $request){
        $request->validate([
            
        ]);
        $data = $request->all();
        
        return redirect()->route('assessments')->with('success', '
        Data assessment berhasil di simpan!');
    }
}
