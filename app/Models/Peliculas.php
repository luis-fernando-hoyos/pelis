<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';
	protected $primaryKey = 'cod_pel';	
    public $incrementing = true;
	public $timestamps = false;
}
