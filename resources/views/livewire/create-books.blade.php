<div>
    <h1>Create Books</h1>

    <form wire:submit.prevent='CreateBooks'>

        <div>
            <label for="title"></label>
            <input wire:model='title' type="text" id="title" placeholder="input title">
            @error('title')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <div>
            <textarea wire:model='synopsis' id="synopsis" cols="30" rows="10"></textarea>
            @error('synopsis')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <div>
            <input wire:model='photo' type="file" id="photo" accept="image/png, image/jpg, image/jpeg"
                placeholder="input title">
            @error('photo')
                <p> {{ $message }} </p>
            @enderror <br>

            @if ($photo)
                <p>prefiew</p>
                <img src="{{ $photo->temporaryUrl() }}" alt="">
            @endif
        </div>

        <div>
            <input wire:model='publisher' type="text" id="publisher" placeholder="publisher">
            @error('publisher')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <div>
            <input wire:model='release' type="date" id="release" placeholder="release date">
            @error('release')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <div>
            <input wire:model='isbn' type="number" id="isbn" placeholder="isbn">
            @error('isbn')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <div>
            <input wire:model='page' type="number" id="page" placeholder="page">
            @error('page')
                <p> {{ $message }} </p>
            @enderror <br>
        </div>

        <button wire:click.prevent='CreateBooks'>Create</button>
    </form>
</div>
