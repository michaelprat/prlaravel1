<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
   
    protected $fillable=['id','nama_matkul'];
    protected $primarykey='id';
}
