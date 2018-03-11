<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable=['id','nama_siswa','tanggal_lahir','idwali'];
    protected $primarykey='id';
}
