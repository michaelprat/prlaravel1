<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
   
    protected $fillable=['id','nama_matkul'];
    protected $primarykey='id';
    
    public function siswa()
   {
      return $this->belongsToMany('App\siswa','raports','id_siswa','id_matkul');    
   }

}
