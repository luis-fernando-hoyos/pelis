<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table = 'calidad';
	protected $primaryKey = 'cod_cal';	
    public $incrementing = false;
	public $timestamps = false;
}
