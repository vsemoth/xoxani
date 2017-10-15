@extends('layouts.app')
@section('title', ' | Xoxani Chat')

@section('content')
	<div id="app">
		
		<h1>Xoxani</h1>
		<chat-log :messages="messages"></chat-log><hr>
		<chat-composer v-on:messagesent="addMessage"></chat-composer>

	</div>
@endsection