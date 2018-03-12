<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable=['id','nama_siswa','tanggal_lahir','idwali'];
    protected $primarykey='id';

    public function matkul()
   {
      return $this->belongsToMany('App\siswa','raports','id_siswa','id_matkul');    
   }


   public function wali()
   {
    return $this->belongsTo('App\wali','idwali');
   }


}
