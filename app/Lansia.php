<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lansia extends Model
{
	protected $table = 'lansias';
    protected $guarded = [];
    protected $primaryKey = 'id_lansia';

    public function user()
    {
      	return $this->belongsTo('App\User','id');
    }

 	public function Rekam_Medis()
    {
        return $this->hasMany('App\Rekam_Medis','id_lansia');
    }
}
