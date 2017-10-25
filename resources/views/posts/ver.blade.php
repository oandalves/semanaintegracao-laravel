@extends('layouts.app')

@section('titulo')
	Post ID {{$post->id}}
@endsection

@section('content')

    {{$post}}

@endsection
