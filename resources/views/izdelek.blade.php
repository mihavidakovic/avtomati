@extends('layout.app')
@section('content')

<div class="izdelek">
	<div class="slika" style="background-image: url({{$izdelek->slika}});">
	</div>
	<div class="info">
		<header>
			<h2>{{$izdelek->ime}}</h2>
			<ul class="glasovi"> 
			@if($izdelek->averageRating()[0] < 0.6)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star-half"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 0.6 && $izdelek->averageRating()[0] <= 1)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 1 && $izdelek->averageRating()[0] <= 1.6)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star-half"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 1.6 && $izdelek->averageRating()[0] <= 2)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 2 && $izdelek->averageRating()[0] <= 2.6)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star-half"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 2.6 && $izdelek->averageRating()[0] <= 3)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-outline"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 3 && $izdelek->averageRating()[0] <= 3.6)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star-half"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 3.6 && $izdelek->averageRating()[0] <= 4)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-outline"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 4 && $izdelek->averageRating()[0] <= 4.6)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-half"></i></a></li>
			@elseif($izdelek->averageRating()[0] > 4.6 && $izdelek->averageRating()[0] <= 5)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star-half"></i></a></li>
			@elseif($izdelek->averageRating()[0] == 5.000)
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 1])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 2])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 3])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 4])}}"><i class="ion ion-android-star"></i></a></li>
				<li><a href="{{route('izdelekGlasuj', [$izdelek->id, 5])}}"><i class="ion ion-android-star"></i></a></li>
			@endif
			</ul>		
		</header>
		@if ($errors->get('fail'))
		<div class="ojoj">
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</div>
		@endif
		@if ($errors->get('success'))
		<div class="ojoj">
		    <div class="alert alert-success">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		</div>
		@endif
		<span class="seperator">Opis:</span>
		<p>{{$izdelek->opis}}</p>
		<span class="seperator">Cena:</span>
		<p>{{$izdelek->cena}}€</p>
		<span class="seperator">Kategorija:</span>
		<p><a href="#">{{$izdelek->podkategorija->kategorija->ime}}</a> -> <a href="#">{{$izdelek->podkategorija->ime}}</a></p>
	</div>
</div>
<div class="relevant izdelki">
	<h3>Podobni izdelki</h3>
	<ul class="podobno">
		@foreach($relevantni as $relavanten)
			<a href="{{route('getIzdelek', $relavanten->id)}}">
				<li>
					<div class="img" style="background-image: url({{$relavanten->slika}});">
						<div class="info">
							<h3>{{$relavanten->ime}}</h3>
							<h4>{{$relavanten->cena}}€</h4>
						</div>
					</div>
				</li>
			</a>
		@endforeach
	</ul>
</div>


@endsection