<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idiomas extends Model
{
    protected $table = 'idiomas';
	protected $primaryKey = 'tipo_idi';	
    public $incrementing = false;
	public $timestamps = false;
}
