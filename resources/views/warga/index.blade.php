@extends('layouts.master')

@section('content')
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
               {{session('sukses')}}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <H1>Data Warga</H1>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm" style='float: right;' data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Warga
                    </button>  
                </div>
                <table class ="table table-sm table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    @foreach ($data_warga1 as $warga)
                    <tr>
                        <td>{{$warga->NIK}}</td>
                        <td>{{$warga->Nama}}</td>
                        <td>{{$warga->Tempat_lahir}}, {{$warga->TTL}}</td>
                        <td>{{$warga->Jenis_Kelamin}}</td>
                        <td>{{$warga->Alamat}}</td>
                        <td>{{$warga->Agama}}</td>
                        <td>
                            <a href="/warga/{{$warga->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/warga/{{$warga->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda ingin menghapus data tersebut?')">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form action="/warga/create" method="POST"> 
                                {{csrf_field()}}
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">NIK</label>
                                    <input name="NIK" type="number" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK" required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input name="Nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Nama"required>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-sm">
                                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                                        <input name="Tempat_lahir" type="text" class="form-control " id="tempat" aria-describedby="emailHelp" placeholder="Tempat Lahir" required>
                                        <div class="invalid-feedback">Example invalid select feedback</div>
                                    </div>
                                    <div class="col-sm">
                                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                        <input name="TTL" type="date" class="form-control float-right" id="tanggal" aria-describedby="emailHelp" required> 
                                        <div class="invalid-feedback">Example invalid select feedback</div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                                <select name="Jenis_Kelamin" class="form-select" id="jeniskelamin" aria-label="Default select example">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                <select name="Agama" class="form-select" id="agama" aria-label="Default select example">
                                    <option selected>Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                    <textarea name="Alamat" class="form-control" id="alamat" rows="3" required></textarea>
                                    <div class="invalid-feedback">Example invalid select feedback</div>
                                </div> 
                                
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                            </div>
                        </div>
@endsection
                        


