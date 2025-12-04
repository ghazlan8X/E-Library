<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBooks extends Component
{
    use WithFileUploads;

    public $title ='';
    public $synopsis ='';
    public $photo;
    public $publisher ='';
    public $release ='';
    public $isbn ='';
    public $page ='';

    public function CreateBooks(){
        $this->validate([
            'title' => 'required|string',
            'synopsis' => 'required|string',
            'photo' => 'nullable|image',
            'publisher' => 'required|string',
            'release' => 'required|date',
            'isbn' => 'required|integer|digits:13|unique:books',
            'page' => 'required|integer|min:1'
        ]);

        $photoPath = null;

        if($this->photo){
            $photoPath = $this->photo ->store('photo', 'public');
        }

        BooksModel::create([
            'title' => $this->title,
            'synopsis' => $this->synopsis,
            'photo' => $photoPath,
            'publisher' => $this->publisher,
            'release' => $this->release,
            'isbn' => $this->isbn,
            'page' => $this->page,
        ]);

        return $this->redirect(route('books'));
    }

    public function render()
    {
        return view('livewire.create-books');
    }
}
