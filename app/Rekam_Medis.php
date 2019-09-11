<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rekam_Medis extends Model
{

	protected $table = 'rekam_medis';
    protected $guarded = [];
    protected $primaryKey = 'id_rekam_medis';


     public function Kader()
    {
        return $this->belongsTo('App\Kader','id_kader');
    }
     public function Lansia()
    {
        return $this->belongsTo('App\Lansia','id_lansia');
    }
}
