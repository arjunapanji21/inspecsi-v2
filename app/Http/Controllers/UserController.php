<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(){
        $props = [
            'title' => "Users",
            'users' => User::orderBy('created_at', 'desc')->get(),
        ];
        return view('users', $props);
    }

    public function user_baru(){
        $props = [
            'title' => "Add New User",
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
            'rooms' => Room::orderBy('name', 'asc')->get(),
        ];
        return view('user-baru', $props);
    }

    public function user_baru_simpan(Request $request){
        $request->validate([
            'name' => 'required',
            'room_id' => 'required',
            'hospital_id' => 'required',
            'email' => 'required|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $user_id = User::create($data)->id;
        if($data['role'] == 'Kepala Ruang'){
            $room = Room::find($data['room_id']);
            $room->update([
                'user_id' => $user_id
            ]);
        }
        return redirect()->route('users')->with('success', 'User baru berhasil di tambahkan!');
    }

    public function user_edit($id){
        $props = [
            'title' => "Add New User",
            'user' => User::find($id),
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
            'rooms' => Room::orderBy('name', 'asc')->get(),
        ];
        return view('user-edit', $props);
    }

    public function user_update($id, Request $request){
        $data = $request->all();
        $base = User::find($id);
        $base->update($data);
        return redirect()->route('users')->with('success', 'Berhasil mengupdate data user!');
    }

    public function user_hapus($id){
        $base = User::find($id);
        $base->delete();
        return redirect()->route('users')->with('success', 'Berhasil menghapus data user!');
    }
}