<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <h1>books</h1>

    @foreach ( $books as $book)
        <div>
            {{-- <img src="{{ $photo->temporaryUrl() }}" alt=""> --}}
            {{ $book->title }}                    
            <img style="width:100px" src="{{ Storage::url($book->photo) }}" alt="">

            <button wire:click='detail({{ $book->id }})'>view</button>
        </div>
    @endforeach
</div>
