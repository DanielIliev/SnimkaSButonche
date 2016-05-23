@foreach ($drinks as $drink)
{{$drink}} <br>
@endforeach


@extends('layouts.Master')

@section('title', 'Title')

@section('header')
    @parent
@endsection

@section('content')
	//content
	<table>
    @foreach ($properties as $property)
	
	@endforeach
	</table>
@endsection
