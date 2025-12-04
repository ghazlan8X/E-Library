<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Books extends Component
{
    use WithFileUploads;

    // menginisialisasi (mempersiapkan) komponen tepat sebelum komponen tersebut ditampilkan (rendered) di halaman web.
    // Properti publik untuk menampung koleksi user
    public $books;

    // Metode mount dipanggil saat komponen diinisialisasi
    public function mount()
    {
        // Ambil semua data user dari database
        $this->books = BooksModel::all();
    }

    // detail
    public function detail($id){
        return redirect(route('books.detail', $id));
    }

    public function render()
    {
        return view('livewire.books');
    }
}
