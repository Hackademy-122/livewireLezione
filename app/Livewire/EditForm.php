<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditForm extends Component
{
    public $title;
    public $body;
    public $articleId;
    public Article $articleObject;

    // public function mount($articleId){
    //     //Cerco l'articolo in base all'id passato
    //     $article = Article::find($articleId);
    //     //Valorizzo la proprietá title con il valore della proprietá title dell'articolo trovato in base all'id
    //     $this->title = $article->title;
    //     //Valorizzo la proprietá body con il valore della proprietá body dell'articolo trovato in base all'id
    //     $this->body = $article->body;
    // }

    public function mount($articleObject){

        $this->articleObject = $articleObject;
       
        $this->title = $articleObject->title;

        $this->body = $articleObject->body;
    }

    // public function update(){
    //     $article = Article::find($this->articleId);
    //     $article->update([
    //         'title'=>$this->title,
    //         'body'=>$this->body
    //     ]);

    //     $this->reset();

    //     //redirect()->with('message','Articolo inserito con successo');
    //     return redirect()->route('article_index')->with('message','Articolo modificato con successo');
    // }

    public function update(){
        $this->articleObject->update([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        $this->reset();

        //redirect()->with('message','Articolo inserito con successo');
        return redirect()->route('article_index')->with('message','Articolo modificato con successo');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
