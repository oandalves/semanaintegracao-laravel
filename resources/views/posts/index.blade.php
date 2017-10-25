@extends('layouts.app')

@section('titulo', 'Todos os posts')
@section('content')

@if(count($posts) == 0)
	Nenhum post cadastrado
@else
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($posts as $post)
			<tr>
				<th>{{$post->id}}</th>
				<th>{{$post->titulo}}</th>
				<th>
					<a href="{{route('posts.show',$post->id)}}" class="btn btn-primary btn-xs">Ver</a>
				</th>
			</tr>
			@endforeach
		</tbody>
	</table>
@endif

@endsection
