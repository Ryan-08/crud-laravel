@extends('main')
@section('judul', 'CRUD | Beranda')
@section('konten')
<div class="myBtn">                       
    <a href="/tambah" class="btn btn-dark">
        Tambahkan Anggota
    </a>               
</div>    
@if($message = Session::get('message'))
    <h1 class="text-center">{{$message}}</h1>
@else
<table class="table text-white" style="width:100%;">
        <tr>
        <th >Id</th>
        <th >Nama Anggota</th>        
        <th >jenis Kelamin</th>
        <th >Nama Ketua</th>
        <th colspan="2">Aksi</th>
    </tr>    
    @foreach($All as $data)    
    <tr >
        <td class="cntr">{{$data->id}}</td>
        <td >{{$data->nama}}</td>        
        <td class="cntr">{{$data->jenis_kelamin}}</td>        
        <td >{{$data->nama_ketua}}</td>
        <td class="cntr">
            <a class="edit" href="/edit/id={{$data->id}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>                            
            </a>
        </td>
        <td class="cntr">
            <a class="trash" href="/hapus/id={{$data->id}}">
                <i class="fa fa-trash" aria-hidden="true"></i>                            
            </a>
        </td>     
    </tr>         
    @endforeach
@endif

@endsection