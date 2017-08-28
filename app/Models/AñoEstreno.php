<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AñoEstreno extends Model
{
    protected $table = 'year_estreno';
	protected $primaryKey = 'year_a';	
    public $incrementing = false;
	public $timestamps = false;
}
