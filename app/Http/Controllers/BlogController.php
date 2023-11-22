<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index($pag){
        $posts = $pag * 6;
        $inicio = $posts - 6;
        $publicaciones = Blog::orderBy('created_at', 'desc')->skip($inicio)->take($posts)->get();
        $numeroPublicaciones = Blog::count();
        $numero = ceil($numeroPublicaciones / 6);
        return view("pags.blog", compact('publicaciones', 'numero', 'pag'));
    }

    public function post($id){
        $post = Blog::find($id);
        return view("pags.posts", compact("post"));
    }

    public function store(PostRequest $request){
        $user = auth()->user();
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/images', $imageName);

        Blog::create([
            'titulo' => $request->title,
            'imagen' => $imageName,
            'subdescripcion' => $request->subcontent,
            'descripcion' => $request->content,
            'user_id' => $user->id
        ]);

        return redirect()->route('blog', ['pag'=>1])->with('success','Publicado');
    }
}
