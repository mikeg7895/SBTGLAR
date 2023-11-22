<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Blog;

class Post extends Component
{
    public $coment = '';
    public $feedback = '';
    public $idpost; 
    
    public function mount($id){
        $this->idpost = $id;
    }

    public function render()
    {
        $blog = Blog::find($this->idpost);
        $comentarios = $blog->commentsByUsers()->orderBy('comment_blog_user.created_at', 'desc')->get();
        return view('livewire.post', compact('comentarios'));
    }

    public function store(){
        if(!auth()->user()){
            return redirect()->route('login');
        }
        if($this->coment == ''){
            $this->feedback = 'Agrega un comentario';
            return 0;
        }
        $blog = Blog::find($this->idpost);
        $blog->commentsByUsers()->attach(auth()->user(), ['comentario'=>$this->coment, 'created_at' => now(), 'updated_at' => now()]);
        $this->coment = '';
    }
}
