<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table = 'calificacion';
	protected $primaryKey = 'cod_clf';	
    public $incrementing = false;
	public $timestamps = false;
}
