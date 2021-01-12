@extends('layouts.master')

@section('content')
            <h1>Edit data warga</h1>
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif
            <div class="row">
           
            
            
            <form action="/warga/{{$warga->id}}/update" method="POST"> 
                    {{csrf_field()}}
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                    <input name="NIK" type="number" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK" value="{{$warga->NIK}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama" value="{{$warga->Nama}}"required>
                </div>
                <div class="row g-3">
                        <div class="col-sm">
                            <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                            <input name="TTL" type="text" class="form-control " id="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir"  required>
                        </div>
                        <div class="col-sm">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                            <input name="TTL" type="date" class="form-control float-right" id="tanggal" aria-describedby="emailHelp" required> 
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                            <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example" >
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L" @if($warga->Jenis_Kelamin == 'L') selected @endif>Laki-Laki</option>
                                <option value="P" @if($warga->Jenis_Kelamin == 'P') selected @endif>Perempuan</option>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Agama</label>
                            <select name="Agama" class="form-select" id="agama" aria-label="Default select example" value="{{$warga->Agama}}">
                                <option selected>Pilih Agama</option>
                                <option value="Islam" @if($warga->Agama == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if($warga->Agama == 'Kristen') selected @endif>Kristen</option>
                                <option value="Katolik" @if($warga->Agama == 'Katolik') selected @endif>Katolik</option>
                                <option value="Hindu" @if($warga->Agama == 'Hindu') selected @endif>Hindu</option>
                                <option value="Buddha" @if($warga->Agama == 'Buddha') selected @endif>Buddha</option>
                                <option value="Konghucu" @if($warga->Agama == 'Konghucu') selected @endif>Konghucu</option>
                                <option value="Lainnya" @if($warga->Agama == 'Lainnya') selected @endif>Lainnya</option>
                            </select>
                    </div>
                     <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                        <textarea name="Alamat" class="form-control" id="alamat" rows="3" required>{{$warga->Alamat}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-warning btn-sm">Update</button>
                </form>
                </div>
            </div>
@endsection
        


           
    


