@extends('layouts.Master')
@section('title', 'Домашна страница')
@section('content')
	<div class="container">
		<div class="jumbotron navbar">
			<h2>Добре дошли в главната страница</h2>
			<br>
			<h3 class="randomJoke"></h3>
		</div>
	</div>
	<script>
		$(function() {
			$.getJSON( "https://api.chucknorris.io/jokes/random", function( data ) {
				$.each(data, function(key, val) {
					if (key == "value") {
						joke = val;
						$('.randomJoke').text(joke);
					}
				});
			});
		});
	</script>
@endsection
