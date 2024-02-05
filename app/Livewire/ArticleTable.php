<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleTable extends Component
{
    // public $articles=[];

    // public function mount(){
    //     $this->articles = Article::all();
    // }

    public function destroy($pippo){
        //Di tutti gli articoli presenti nella tabella articles, cercami quello con l'id specifico mandato alla funzione
        // $article = Article::find($id);
        // $article->delete();

        Article::find($pippo)->delete();
    }

    public function render()
    {
        return view('livewire.article-table', ['articles'=>Article::all()]);
    }

    // public function render()
    // {
    //     return view('livewire.article-table');
    // }
}
