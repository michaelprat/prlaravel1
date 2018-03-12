<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    
    protected $fillable=['id_siswa','id_matkul','nama_guru','nilai'];

    public function wali()
    {
     return $this->belongsTo('App\wali','idwali');
    }
 
    public function siswa()
    {
       return $this->belongsToMany('App\siswa','raports','id_siswa','id_matkul');    
    }
 


}
