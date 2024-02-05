<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    public $title;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:20',
    ];

    protected $messages = [
        'title.required' => 'Il titolo é richiesto',
        'title.min' => 'Il titolo deve essere di minimo 6 cvaratteri',
        'body.required' => 'Il corpo é richiesto',
        'body.min' => 'Il corpo deve essere di minimo 6 cvaratteri',
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    //Action
    public function store(){

        $this->validate();

        Article::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);

        //Svuota i campi di input
        $this->reset();

        //redirect()->with('message','Articolo inserito con successo');
        return redirect()->back()->with('message','Articolo inserito con successo');
    }

    public function render()
    {
        return view('livewire.create-form');
    }
}
