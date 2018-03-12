<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    
    protected $fillable=['id_siswa','id_matkul','nama_guru','nilai'];

    public function siswa()
   {
      return $this->belongsToMany('App\siswa','raports','id','id_siswa');    
   }
   public function matkul()
   {
      return $this->belongsToMany('App\matkul','raports','id','id_matkul');    
   }


}
