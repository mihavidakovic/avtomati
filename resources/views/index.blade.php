@extends('layout.app')
@section('content')

<div class="lokacija">
	<div class="img" style="background-image: url({{$lokacija->slika}});">
		<div class="info">
			<h3>{{$lokacija->ime}}</h3>
			<h4>{{$lokacija->naslov}}</h4>
		</div>
	</div>
	<div id="gmap"></div>
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDVOJbHkAFkXCKAZWtAsS8wrqvcOuP_To0">
    </script>
    <script type="text/javascript" src="{{asset('js/maplace.js')}}"></script>
	<script type="text/javascript">
		$( document ).ready(function() {
			$('.izdelki').load('izdelki/2');
			$('.nav-tabs li:nth-child(2)').addClass('active');
		});
		$(function() {
		    new Maplace({
		        locations: [{
		        	lat: {{$lokacija->lat}},
		        	lon: {{$lokacija->lon}},
		        	zoom: 17
		        }],
		        controls_on_map: false,
		    }).Load();
		});
	</script>
</div>
<div class="ponudba">
	<div class="load">
		<div class="loader"><p></p></div>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		@foreach($kategorije as $kategorija)
			<li role="presentation"><a data-kategorija2="{{$kategorija['id']}}" href="#{{$kategorija['id']}}" aria-controls="home" role="tab" data-toggle="tab">{{$kategorija['ime']}}</a>
			<ul>
			<?php $podkategorije = App\Podkategorija::where('kategorija_id', '=', $kategorija['id'])->get() ?>

				@foreach($podkategorije as $podkategorija)
					<?php $kategorija = App\Kategorija::where('id', '=', $podkategorija['kategorija_id'])->first(); ?>
					<li data-kategorija="{{$podkategorija['kategorija_id']}}" data-podkategorija="{{$podkategorija['id']}}">{{$podkategorija['ime']}}
					</li>
				@endforeach

			</ul>
			</li>
		@endforeach
	</ul>

	<!-- Tab panes -->
	<div class="izdelki">
	</div>
</div>


@endsection