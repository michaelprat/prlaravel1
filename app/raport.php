<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    
    protected $fillable=['id_siswa','id_matkul','nama_guru','nilai'];
 
}
