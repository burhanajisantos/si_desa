<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = ['nip','nama','tempat','tl','jenis_kelamin','alamat','jabatan'];
    //
}
