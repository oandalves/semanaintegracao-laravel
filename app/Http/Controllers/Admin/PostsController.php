<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Post;

class PostsController extends Controller
{

    public function index() {
        $posts = Post::all();
		return view('admin.posts.index', compact('posts'));
    }

    public function create() {
		return view('admin.posts.novo');
    }

    public function store(Request $request) {
		$request->validate([
			'titulo' => 'required|string',
			'conteudo' => 'required'
		]);

		$post = Post::create([
			'titulo' => $request['titulo'],
			'conteudo' => $request['conteudo'],
			'usuario_id' => Auth::user()->id,
		]);

		if($post){
			return redirect()->route('admin.post.index')->with('sucess', 'Post cadastrado com sucesso!');
		} else {
			return redirect()->back()->with('danger', 'Não foi possível salvar.');
		}
    }

    public function show($id) {
		$post = Post::find($id);
		return view('admin.posts.ver', compact('post'));
    }

    public function edit($id) {
        $post = Post::find($id);
		return view('admin.posts.editar', compact('post'));
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);

		$request->validate([
			'titulo' => 'required|string',
			'conteudo' => 'required'
		]);

		$post->update([
			'titulo' => $request['titulo'],
			'conteudo' => $request['conteudo'],
		]);

		if($post){
			return redirect()->back()->with('sucess', 'Post atualizado com sucesso!');
		} else {
			return redirect()->back()->with('danger', 'Não foi possível salvar.');
		}
    }

    public function destroy($id) {
        $post = Post::find($id);
		if($post->delete()){
			return redirect()->route('admin.posts.index')->with('sucess', 'Post excluido com sucesso!');
		} else {
			return redirect()->back()->with('danger', 'Não foi possível excluir.');
		}
    }
}
