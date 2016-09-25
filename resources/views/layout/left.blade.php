<div class="left">
	<div class="logo">
		<a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}"></a>
	</div>
	<div class="urnik">
		<h2>Odpiralni čas:</h2>
		<p>Odprto 24 ur na dan!</p>
	</div>
	<div class="lokacije">
		<h2>Lokacije:</h2>
		<ul>
			@foreach($lokacije as $lokacija)
				<li>
					<a href="#">{{$lokacija->ime}}</a>
				</li>
				<li>
					<a href="#">Kmalu še več lokacij ...</a>
				</li>
			@endforeach
		</ul>
	</div>
	<div class="placilo">
		<h2>Možnosti plačila:</h2>
		<ul>
			<li>
				<img src="{{asset('img/moneta.png')}}">
			</li>
			<li>
				<img src="{{asset('img/visa.png')}}">
			</li>
			<li>
				<i class="ion ion-cash"></i>
			</li>
		</ul>
	</div>
	<a href="#" class="ponudba-btn btn">Poglej ponudbo</a>
</div>