@extends('main')
@section('judul', 'CRUD | Edit')
@section('konten')
    <h3>Edit Data Anggota</h3>
    @foreach($anggota as $data)
        <form action="/edit/id={{$data->id}}" method="post" class="p-5">    
        @csrf    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" value="{{$data->nama}}" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="idanggota" value="{{$data->id}}" autocomplete="off">
                </div>
            </div>            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>   
                <div class="col-sm-10">         
                    <div class="form-check form-check-inline">       
                        @if($data->jenis_kelamin == 'Laki-laki')                 
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                        @endif
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        @if($data->jenis_kelamin == 'Perempuan')                 
                        <input class="form-check-input"  type="radio" name="jk" id="inlineRadio2" value="2" checked>
                        @else
                        <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                        @endif
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>               
            @endforeach
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">Ketua</label>                         
                <div class="col-sm-10">
                @foreach($ketua as $list)
                    @if($list->id == $data->id_ketua)
                    <a role="button" id="namaKetua" class="custom-select col-md-6 text-dark" onclick="drop('selectKetua')">{{ $list->nama }}</a>                                                               
                    @endif
                @endforeach
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectKetua" class="dropdown-content col-md-5">                        
                    <select class="custom-select plaintext col" name="select" size="5">                            
                        <option class="ketua">--Pilih Ketua--</option>
                        @foreach($ketua as $list)
                            @if($list->id == $data->id_ketua)
                                <option selected class="ketua" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @else
                            <option class="ketua" value="{{ $list->nama }}">{{ $list->nama }}</option> 
                            @endif
                        @endforeach 
                    </select>
                </div> 
            </div>    
            <div class="form-group row">                                           
                <input type="submit" name="Submit" class="btn btn-dark" value="Edit Data"></input>            
            </div>
        </form>
    </div>  
    @endsection