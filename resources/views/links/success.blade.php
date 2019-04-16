
@extends('default')

@section('content') 
<h1>BRAVO, VOTRE LIEN A ETE RACCOURCI</h1>

	<p>
		<a class="btn btn-primary" 
		href="{{ action('LinksController@show', ['id' => $link->id])}}">
			{{ action('LinksController@show', ['id' => $link->id]) }}
		</a>
	</p>
@stop