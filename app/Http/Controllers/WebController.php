<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class WebController extends Controller
{
    public function home(){
        $result = DB::table('anggota')->get();
        if (!$result->isEmpty()){
            $All = DB::table('anggota')
            ->join('ketua', 'ketua.id','=', 'id_ketua')
            ->select('anggota.*', 'ketua.nama as nama_ketua')
            ->orderBy('anggota.id', 'asc')
            ->get();
            return view('home', ['All' => $All]);
        }
        else{
            Session::flash('message', 'Database Kosong');
            return view('home');
        }
    }

    public function menuTambah(){
        $ketua = DB::table('ketua')->get();
        return view('tambah', ['ketua' => $ketua]);
    }

    public function menuEdit($id){
        $anggota = DB::table('anggota')                
                ->where('anggota.id', $id)                
                ->get();
        $ketua = DB::table('ketua')->get();
        return view('edit', ['anggota' => $anggota, 'ketua' => $ketua]);
    }
}
