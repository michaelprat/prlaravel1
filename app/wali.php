<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wali extends Model
{
    protected $fillable=['id','nama_wali'];
    protected $primarykey='id';


    public function siswa()
    {
     return $this->hasMany('App\siswa','idwali');
    }
}
