<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kader extends Model
{
	protected $table = 'kader';
    protected $guarded = [];
    protected $primaryKey = 'id_kader';

   public function user()
    {
      	return $this->belongsTo('App\User','id');
    }
    
     public function Kader()
    {
       return $this->hasMany('App\Rekam_Medis');
    }
}
