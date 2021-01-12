<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(Request $request){
        if($request->has('cari')){
            $data_warga = \App\Models\Warga::where('Nama','LIKE','%'.$request->cari.'%')->get(); 
        }
        else{
            $data_warga = \App\Models\Warga::all();
        }
         return view('warga.index',['data_warga1' => $data_warga]);
    }
    public function create(Request $request){
        \App\Models\Warga::create($request->all());
        return redirect('/warga')->with('sukses','Data berhasil ditambahkan');
    }
    public function edit($id){
        $warga = \App\Models\Warga::find($id);
        return view('warga/edit',['warga' => $warga]);
    }
    public function update(Request $request,$id){
        $warga = \App\Models\Warga::find($id);
        $warga->update($request->all());
        return redirect('/warga')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id){
        $warga = \App\Models\Warga::find($id);
        $warga->delete($warga);
        return redirect('/warga')->with('sukses','Data berhasil dihapus');
    }

}
