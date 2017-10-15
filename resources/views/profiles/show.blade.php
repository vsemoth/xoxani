@extends('layouts.app')

@section('title', ' | Avatar')

@section('content')

	@foreach($avatar as $avatar1)
		{{$avatar->avatar}}
	@endforeach

@endsection