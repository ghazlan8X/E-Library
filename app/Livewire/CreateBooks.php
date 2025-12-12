<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBooks extends Component
{
    use WithFileUploads;

    public $title       ='';
    public $writer      ='';
    public $synopsis    ='';
    public $photo;
    public $publisher   ='';
    public $release     ='';
    public $isbn;
    public $page        ='';

    private function generateIsbn()
    {
        // Loop sampai dapat ISBN yang belum ada
        do {
            // Generate angka 13 digit
            $isbn = str_pad(random_int(0, 9999999999999), 13, '0', STR_PAD_LEFT);
        } while (BooksModel::where('isbn', $isbn)->exists());

        return $isbn;
    }


    public function CreateBooks()
    {
        $this->validate([
            'title' => 'required|string',
            'writer' => 'required|string',
            'synopsis' => 'required|string',
            'photo' => 'nullable|image',
            'publisher' => 'required|string',
            'release' => 'required|date',
            // 'isbn' => 'required|integer|digits:13|unique:books',
            'page' => 'required|integer|min:1'
        ]);

        $this->isbn = $this->generateIsbn();

        $photoPath = null;

        if ($this->photo) {
            $photoPath = $this->photo->store('photo', 'public');
        }

        BooksModel::create([
            'title'     => $this->title,
            'writer'    => $this->writer,
            'synopsis'  => $this->synopsis,
            'photo'     => $photoPath,
            'publisher' => $this->publisher,
            'release'   => $this->release,
            'isbn'      => $this->isbn,
            'page'      => $this->page,
        ]);

        return $this->redirect(route('dashboard'));
    }

    public function back(){
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.create-books');
    }
}
