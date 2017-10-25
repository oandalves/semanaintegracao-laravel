@extends('layouts.app')

@section('titulo', 'Novo post')

@section('content')

<form class="" action="{{route('admin.post.create.save')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="titulo">Título</label>
		<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Informe o título do post" value="{{old('titulo')}}">
	</div>
	<div class="form-group">
		<label for="titulo">Conteúdo</label>
		<textarea name="conteudo" class="form-control" rows="8" cols="80">{{old('conteudo')}}</textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>

@endsection
