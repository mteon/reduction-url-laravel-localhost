@extends('default')

@section('content')
	<h1>Creer un nouveau lien</h1>

	<form action="" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="url">Lien a raccourcir</label><br>
			<input type="text" name="url" id="url" placeholder="http://www.google.com" 
			class="form-control"> <br><br>
			<button class="btn btn-primary" name="cutLinkButton" id="cutLinkButton">Raccourcir</button>
		</div>
	</form>
@stop