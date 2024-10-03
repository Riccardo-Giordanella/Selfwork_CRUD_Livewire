<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{

    #[Validate('required', message: 'Il campo titolo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo titolo deve contenere almeno 3 caratteri')]
    public $title;

    #[Validate('required', message: 'Il campo sottotitolo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo sottotitolo deve contenere almeno 3 caratteri')]
    public $subtitle;

    #[Validate('required', message: 'Il campo corpo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo corpo deve contenere almeno 3 caratteri')]
    public $body;

    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
    }

    public function updateArticle()
    {
        $this->validate();

        // Article::create([
        //     'title' => $this->title,
        //     'subtitle' => $this->subtitle,
        //     'body' => $this->body
        // ]);
        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body
        ]);

        // $this->clearForm();
        $this->reset();

        session()->flash('message', 'Articolo aggiornato con successo');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
