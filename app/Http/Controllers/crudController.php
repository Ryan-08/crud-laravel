<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class crudController extends Controller
{    
    public function insertData(Request $request){
        $ketua = DB::table('ketua')                    
                    ->where('nama', $request->select)
                    ->value('id');

        DB::table('anggota')
        ->insert([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'id' => $request->idanggota,
            'id_ketua' => $ketua            
        ]);        
        return redirect('/home');
    }

    public function deleteData($id){                
        DB::table('anggota')
        ->where('id', $id)
        ->delete();                     
        return redirect('/home');               
    }

    public function editData(Request $request, $id){
        $ketua = DB::table('ketua')                    
                    ->where('nama', $request->select)
                    ->value('id');

        DB::table('anggota')
        ->where('id', $id)
        ->update([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jk,
            'id' => $request->idanggota,
            'id_ketua' => $ketua            
        ]);        
        return redirect('/home');
    }
}
