<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ghanem\Rating\Contracts\Ratingable;
use Ghanem\Rating\Traits\Ratingable as RatingTrait;


class Izdelek extends Model implements Ratingable
{
	protected $fillable = [
    	'ime', 'opis', 'cena', 'slika', 'kategorija_id', 'podkategorija_id',
	];

	protected $table = 'izdelki';

	public function podkategorija() {
		return $this->belongsTo('App\Podkategorija', 'podkategorija_id');
	}

	 use RatingTrait;
}
