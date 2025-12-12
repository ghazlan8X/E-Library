<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Livewire\Component;

class Dashboard extends Component
{
    public $books;

    public function mount(){
        $this->books = BooksModel::all();
    }

    // detail
    public function detail($id){
        return redirect(route('books.detail', $id));
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
