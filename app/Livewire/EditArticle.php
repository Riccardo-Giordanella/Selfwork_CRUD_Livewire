<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class EditArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il campo titolo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo titolo deve contenere almeno 3 caratteri')]
    public $title;

    #[Validate('required', message: 'Il campo sottotitolo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo sottotitolo deve contenere almeno 3 caratteri')]
    public $subtitle;

    #[Validate('required', message: 'Il campo corpo è obbligatorio')]
    #[Validate('min:3', message: 'Il campo corpo deve contenere almeno 3 caratteri')]
    public $body;

    public $img;
    public $newimg;
    public $article;
    public function mount(Article $article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
        $this->img = $article->img;
    }

    public function updateArticle()
    {
        $this->validate();

        if ($this->newimg) {
            $imagePath = $this->newimg->store('images', 'public');
        } else {
            $imagePath = $this->img;
        }

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $imagePath
        ]);

        session()->flash('message', 'Articolo aggiornato con successo');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
