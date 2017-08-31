<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero';
	protected $primaryKey = 'cad_gen';	
    public $incrementing = false;
	public $timestamps = false;
}
