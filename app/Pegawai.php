<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
  

    protected $fillable =[
        'nama', 'email', 'OPD', 'jabatan'
    ];
}
