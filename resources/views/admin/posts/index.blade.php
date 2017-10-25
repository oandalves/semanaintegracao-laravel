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
						<a href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary btn-xs">Editar</a>
						<form class="form-inline" action="{{route('admin.posts.delete',$post->id)}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<button type="submit" class="btn btn-danger btn-xs">Excluir</button>
						</form>
					</th>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif

@endsection
