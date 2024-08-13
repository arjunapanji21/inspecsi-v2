<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function rooms(){
        $props = [
            'title' => "Rooms",
            'rooms' => Room::orderBy('name', 'asc')->get(),
        ];
        return view('rooms', $props);
    }

    public function room_baru(){
        $props = [
            'title' => "Add New Room",
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
            'karu' => User::where('role', 'Kepala Ruang')->orderBy('name', 'asc')->get(),
        ];
        return view('room-baru', $props);
    }

    public function room_baru_simpan(Request $request){
        $data = $request->all();
        Room::create($data);
        return redirect()->route('rooms')->with('success', 'Berhasil menambahkan room baru!');
    }

    public function room_edit($id){
        $props = [
            'title' => "Edit Room Info",
            'room' => Room::find($id),
            'hospitals' => Hospital::orderBy('name', 'asc')->get(),
            'karu' => User::where('role', 'Kepala Ruang')->orderBy('name', 'asc')->get(),
        ];
        return view('room-edit', $props);
    }

    public function room_update($id, Request $request){
        $data = $request->all();
        $base = Room::find($id);
        if($base->user_id != null && $base->user_id != $data['user_id']){
            $old = User::find($base->user_id);
            $old->update([
                'room_id' => null,
            ]);
            $new = User::find($data['user_id']);
            $new->update([
                'room_id' => $id
            ]);
        }
        $base->update($data);
        return redirect()->route('rooms')->with('success', 'Berhasil mengupdate info room!');
    }

    public function room_hapus($id){
        $base = Room::find($id);
        $base->delete();
        return redirect()->route('rooms')->with('success', 'Room berhasil dihapus!');
    }
}
