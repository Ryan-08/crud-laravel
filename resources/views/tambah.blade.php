@extends('main')
@section('judul', 'CRUD | Tambahkan')
@section('konten')
    <h3>Masukkan Data Anggota</h3>
        <form action="/tambah/proses" method="post" class="p-5">
        {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="nama" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Id Anggota</label>
                <div class="col-sm-10">
                    <input type="input" class="form-control" name="idanggota" autocomplete="off">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="form-check form-check-inline">                        
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                </div>
            </div>               
            <div class="form-group row dropdown mb-0">                          
                <label class="col-sm-2 col-form-label">Ketua</label>                         
                <div class="col-sm-10">                
                    <a role="button" id="namaKetua" class="custom-select col-md-6 text-dark" onclick="drop('selectKetua')">--Pilih Ketua--</a>                
                </div>
            </div>
            <div class="form-group row">                
                <div id="selectKetua" class="dropdown-content col-md-5">                        
                    <select class="custom-select plaintext col" name="select" size="5">                            
                        <option class="ketua">--Pilih Ketua--</option>
                        @foreach($ketua as $list)                            
                            <option class="ketua" value="{{ $list->nama }}">{{ $list->nama }}</option>                             
                        @endforeach 
                    </select>
                </div> 
            </div>   
            <div class="form-group row">                        
                <input type="submit" name="Submit" class="btn btn-dark" value="Tambah Data"></input>
            </div>
        </form>
    </div>  
@endsection