<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = ['NIK','Nama','TTL','Tempat_lahir','Jenis_Kelamin','Agama','Alamat'];
}
