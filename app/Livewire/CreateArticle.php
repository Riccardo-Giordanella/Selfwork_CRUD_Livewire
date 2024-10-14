<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class CreateArticle extends Component
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

    public function store()
    {
        $this->validate();

        if ($this->img) {
            $imgPath = $this->img->store('images', 'public');
        } else {
            $imgPath = null;
        }

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $imgPath
        ]);

        // $this->clearForm();
        $this->reset();

        session()->flash('message', 'Articolo creato con successo');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
