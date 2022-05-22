<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;
use Auth;

class EmployeeController extends Controller
{
   public function index(){

    $data = Employees::all();
       return view('data', compact('data'));
   }
   public function tambahpegawai(){
       return view('tambahdata');
   }
   public function insertdata(Request $request){
       Employees::create($request->all());
       return redirect()->route('pegawai');
    
   }

   public function tampilkandata($id){
    $data = Employees::find($id);
    return view('tampildata', compact('data'));
   }

   public function updatedata(Request $request, $id){
    $data = Employees::find($id);
    $data->update($request->all());  
    return redirect()->route('pegawai');
   }

   public function hapus($id)
   {
       $data =Employees::find($id);
       $data = Employees::find($id);
           $data->delete();
           return redirect()->route('pegawai')->with(['message'=> 'Successfully deleted!!']);
       }

   } 
   
