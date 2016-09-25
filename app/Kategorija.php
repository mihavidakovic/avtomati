<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
	protected $fillable = [
    	'ime'
	];

	public function podkategorija() {
		return $this->belongsTo('App\Podkategorija', 'podkategorija_id');
	}

	protected $table = 'kategorije';
}
