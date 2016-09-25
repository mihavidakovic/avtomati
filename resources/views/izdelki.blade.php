@if($izdelki->isEmpty())
	<p class="ni-izdelkov">V tej kategoriji ni izdelkov.</p>
@else
	<ul>
		@foreach($izdelki as $izdelek)
		<a href="{{route('getIzdelek', $izdelek->id)}}">
			<li>
				<div class="img" style="background-image: url({{$izdelek['slika']}});">
					<div class="info">
						<h3>{{$izdelek['ime']}}</h3>
						<h4>{{$izdelek['cena']}}€</h4>
					</div>
				</div>
			</li>
		</a>
		@endforeach
	</ul>
@endif