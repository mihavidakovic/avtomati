<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podkategorija extends Model
{
	protected $fillable = [
    	'ime', 'kategorija_id',
	];

	public function kategorija() {
		return $this->belongsTo('App\Kategorija', 'kategorija_id');
	}

	protected $table = 'podkategorije';

}
