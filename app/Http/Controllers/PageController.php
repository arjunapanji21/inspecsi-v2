<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Hospital;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        $props = [
            'title' => "Login",
        ];
        return view('login', $props);
    }

    public function dashboard(){
        if(auth()->user()->role == "Super Admin"){
            $props = [
                'title' => "Dashboard",
                'assessments' => Assessment::all(),
                'hospitals' => Hospital::all(),
                'rooms' => Room::all(),
                'users' => User::all(),
                'assessments' => Assessment::all(),
            ];
        }elseif(auth()->user()->role == "Kepala Ruang") {
            $props = [
                'title' => "Dashboard",
                'completed' => count(Assessment::where('karu_id', auth()->user()->id)->whereNotNull('finished_at')->get()),
                'uncompleted' => count(Assessment::where('karu_id', auth()->user()->id)->whereNull('finished_at')->get()),
                'assessments' => Assessment::where('karu_id', auth()->user()->id)->orderBy('assessment_date', 'desc')->get(),
            ];
        }
        elseif(auth()->user()->role == "Ketua Tim") {
            $props = [
                'title' => "Dashboard",
                'completed' => count(Assessment::where('katim_id', auth()->user()->id)->whereNotNull('finished_at')->get()),
                'uncompleted' => count(Assessment::where('katim_id', auth()->user()->id)->whereNull('finished_at')->get()),
                'assessments' => Assessment::where('katim_id', auth()->user()->id)->orderBy('assessment_date', 'desc')->get(),
            ];
        }
        return view('dashboard', $props);
    }

    public function assessments(){
        if(auth()->user()->role == "Super Admin"){
            $props = [
                'title' => "Assessments",
                'assessments' => Assessment::all(),
            ];
        }else{
            $props = [
                'title' => "Assessments",
                'assessments' => Assessment::where('karu_id', auth()->user()->id)->orWhere('katim_id', auth()->user()->id)->orderBy('assessment_date', 'desc')->get(),
            ];
        }
        return view('assessments', $props);
    }

    public function assessment_create(){
        $props = [
            'title' => "Assessments",
            'katims' => User::where('role', 'Ketua Tim')->where('hospital_id', auth()->user()->hospital_id)->where('room_id', auth()->user()->room->id)->orderBy('name', 'asc')->get(),
        ];
        return view('assessment-create', $props);
    }

    public function archives(){
        $props = [
            'title' => "Archives",
            'archives' => Assessment::where('archived', true)->get(),
        ];
        return view('archives', $props);
    }

    public function users(){
        $props = [
            'title' => "Users",
            'superadmins' => User::where('role', 'Super Admin')->orderBy('name', 'asc')->get(),
            'admins' => User::where('role', 'Admin')->orderBy('name', 'asc')->get(),
            'karus' => User::where('role', 'Kepala Ruang')->orderBy('name', 'asc')->get(),
            'katims' => User::where('role', 'Ketua Tim')->orderBy('name', 'asc')->get(),
        ];
        return view('users', $props);
    }

    public function hospitals(){
        $props = [
            'title' => "Hospitals",
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
        ];
        return view('hospitals', $props);
    }

    public function rooms(){
        $props = [
            'title' => "Rooms",
            'rooms' => Room::orderBy('name', 'asc')->get(),
        ];
        return view('rooms', $props);
    }
}
