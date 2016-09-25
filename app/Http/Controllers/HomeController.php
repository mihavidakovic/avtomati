<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;



use App\Http\Requests;

class HomeController extends Controller
{
    public function getIndex() {
    	$lokacije = \App\Lokacija::all();
    	$lokacija = DB::table('locations')->latest()->first();

    	$kategorije = \App\Kategorija::all();
    	$podkategorije = \App\Podkategorija::all();
    	$izdelki = \App\Izdelek::all();
    	return view('index', ['lokacije' => $lokacije, 'lokacija' => $lokacija, 'kategorije' => $kategorije, 'podkategorije' => $podkategorije, 'izdelki' => $izdelki]);
    }

	public function getIzdelki($cat_id, $subcat_id) {
		$izdelki = \App\Izdelek::where('kategorija_id', '=', $cat_id)->where('podkategorija_id', '=', $subcat_id)->get();
		return view('izdelki')->with(['izdelki' => $izdelki]);
	}

	public function getIzdelkiKategorija($cat_id) {
		$izdelki = \App\Izdelek::where('kategorija_id', '=', $cat_id)->get();
		return view('izdelki')->with(['izdelki' => $izdelki]);
	}
	
	public function getIzdelek($id) {
		$lokacije = \App\Lokacija::all();
		$izdelek = \App\Izdelek::find($id);
		$relevantni = DB::table('izdelki')->where('podkategorija_id', '=', $izdelek->podkategorija->id)->take(5)->get();
		return view('izdelek')->with(['izdelek' => $izdelek, 'relevantni' => $relevantni, 'lokacije' => $lokacije]);
	}	
	public function izdelekGlasuj(Request $request, $id, $lestvica) {
		if (DB::table('ratings')->where('cookie', '=', $request->cookie('glas'))->where('ratingable_id', '=', $id)->exists()) {
			return back()->withErrors(['fail' => 'Znova lahko glasuješ čez en teden.']);
		} else {
			$izdelek = \App\Izdelek::find($id);
			$user = User::first();
			$string = str_random(40);
			$rating = $izdelek->rating([
			    'rating' => $lestvica,
			    'cookie' => $string
			], $user);


			return back()->withCookie('glas', $string, 10080)->withErrors(['success' => 'Hvala za glas.']);
		}

	}
}
