@extends('layouts.Master')

@section('title', 'Title')

@section('header')
    @parent
@endsection

@section('content')
	//content
    <p>{{$var}}</p>   
@endsection
