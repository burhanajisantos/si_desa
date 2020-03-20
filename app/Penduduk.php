<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillable = ['nik','nama','tempat','tl','jenis_kelamin','alamat','rt','rw','kel_desa','status','pekerjaan','kewarganegaraan','nkk']; 
}
