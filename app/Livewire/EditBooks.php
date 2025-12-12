<?php

namespace App\Livewire;

use App\Models\BooksModel;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBooks extends Component
{
    use WithFileUploads;

    public BooksModel $books;
    public $id;
    public $title;
    public $writer;
    public $synopsis;
    public $photo; //for new photo
    public $oldPhoto;
    public $publisher;
    public $release;
    public $isbn;
    public $page;

    public function mount($id)
    {
        // mengisi books sesuai dengan id yg di cari di booksmodel
        $this->books = BooksModel::findOrfail($id);

        // mengisi variable title dengan title yg ada di variable books
        $this->id           = $this->books->id;
        $this->title        = $this->books->title;
        $this->writer        = $this->books->writer;
        $this->synopsis     = $this->books->synopsis;
        $this->photo        = null; //new photo
        $this->oldPhoto     = $this->books->photo;
        $this->publisher    = $this->books->publisher;
        $this->release      = $this->books->release;
        $this->isbn         = $this->books->isbn;
        $this->page     = $this->books->page;
    }

    public function save($id)
    {
        $validatedData=  $this->validate([
            'title'     => 'required|string',
            'writer'    => 'required|string',
            'synopsis'  => 'required|string',
            'photo'     => 'nullable|image',
            'publisher' => 'required|string',
            'release'   => 'required|date',
            'isbn'      => 'required|integer|digits:13|unique:books,isbn,' . $this->id,
            'page'      => 'required|integer|min:1'
        ]);

        if ($this->photo) {
            // 1. Hapus foto lama jika ada
            if ($this->oldPhoto && Storage::disk('public')->exists($this->oldPhoto)) {
                Storage::disk('public')->delete($this->oldPhoto);
            }

            // 2. Simpan foto baru
            $imagePath = $this->photo->store('photos', 'public');
            $validatedData['photo'] = $imagePath; // Tambahkan path foto baru ke data untuk update

        } else {
            // Jika tidak ada foto baru diupload, gunakan foto lama
            $validatedData['photo'] = $this->oldPhoto;
        }

        // Hapus kunci yang tidak perlu dari $validatedData sebelum update
        unset($validatedData['photo']); // Karena kita menanganinya secara terpisah

        $this->books->update([
            'title' => $validatedData['title'],
            'writer' => $validatedData['writer'],
            'synopsis' => $validatedData['synopsis'],
            'publisher' => $validatedData['publisher'],
            'release' => $validatedData['release'],
            'isbn' => $validatedData['isbn'],
            'page' => $validatedData['page'],
            'photo' => $imagePath ?? $this->oldPhoto, // Gunakan path baru atau path lama
        ]);

        return redirect()->route('books.detail', $id);
    }

    // back
    public function back(){
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.edit-books');
    }
}
