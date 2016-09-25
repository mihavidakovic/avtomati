<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokacija extends Model
{
	protected $fillable = [
    	'ime', 'naslov', 'slika',
	];

	protected $table = 'locations';
}
