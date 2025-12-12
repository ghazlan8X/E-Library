<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class DetailBooks extends Component
{
    use WithFileUploads;

    public $detailbooks;
    // public $booksId;

    // public BooksModel $books;

    // auto fill by id in url
    public function mount($id)
    {
        // booksId be id
        // $this->booksId = $id;

        // find by id
        $this->detailbooks = BooksModel::findOrFail($id);
    }

    // back
    public function back(){
        return redirect()->route('dashboard');
    }

    // edit
    public function EditBooks($id){
        return redirect(route('books.edit', $id));
    }

    // delete book
    public function DeleteBooks($id)
    {
        // find books by id
        $books = BooksModel::find($id);

        if ($books) {
            // delete photo
            if ($books->photo && Storage::disk('public')->exists($books->photo)) {
                Storage::disk('public')->delete($books->photo);
            }

            $books->delete();

            $this->reset();

            // return $this->redirect(url()->previous());
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.detail-books');
    }
}
