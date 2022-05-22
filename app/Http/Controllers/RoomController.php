<?php

namespace App\Http\Controllers;

use App\Models\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function room(){
 
     $data = room::all();
        return view('datakamar', compact('data'));
    }

    public function tambahkamar(){
        return view('tambahkamar');
    }

    public function insertkamar(Request $request){
        Room::create($request->all());
        return redirect()->route('room');
    }

    public function tampilkankamar($id){
        $data = room::find($id);
        return view('tampilkamar', compact('data'));

}
    public function updatekamar(Request $request, $id){
        $data = room::find($id);
        $data->update($request -> all());

        return redirect()->route('room');
    }
    
    public function deletekamar($id)
   {
       $data =room::find($id);
           $data->delete();
           return redirect()->route('room');
       }

}