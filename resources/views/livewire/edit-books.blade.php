<div>
    <section id="BooksForm">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1> edit {{ $title }} </h1>
                </div>

                <div class="card-body">
                    <form wire:submit.prevent='save({{ $id }})' action="">

                        <div class="row">
                            <div class="input-5">
                                <label for="title">Title</label>
                                <input wire:model='title' type="text" id="title" placeholder="Enter Book Title">
                                @error('title')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>

                            <div class="input-5">
                                <label for="writer">Writer</label>
                                <input wire:model='writer' type="text" id="writer"
                                    placeholder="Enter Book Writer">
                                @error('writer')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-10">
                                <label for="synopsis">Synopsis</label>
                                <textarea wire:model='synopsis' id="synopsis" placeholder="Enter Book Synopsis"></textarea>
                                @error('synopsis')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-photo">
                                <div class="input-photo-5">
                                    <label for="photo">Book Cover</label>
                                    <input wire:model='photo' type="file" id="photo"
                                        accept="image/png, image/jpg, image/jpeg" placeholder="Enter Book Cover">
                                    @error('photo')
                                        <p> {{ $message }} </p>
                                    @enderror <br>
                                </div>

                                <div class="input-photo-5">
                                    <p class="preview">Prefiew</p>
                                    @if ($photo)
                                        <img src="{{ $photo->temporaryUrl() }}" alt="">
                                    @endif
                                </div>
                            </div>

                            <div class="input-5">
                                <label for="publisher">Publisher</label>
                                <input wire:model='publisher' type="text" id="publisher"
                                    placeholder="Enter Book Publisher">
                                @error('publisher')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-5">
                                <label for="release">Release</label>
                                <input wire:model='release' type="date" id="release"
                                    placeholder="Enter Book Release Date">
                                @error('release')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>

                            <div class="input-5">
                                <label for="page">Page</label>
                                <input wire:model='page' type="number" id="page" placeholder="Enter Book Page">
                                @error('page')
                                    <p> {{ $message }} </p>
                                @enderror <br>
                            </div>
                        </div>

                        <div class="btn-menu">
                            <button wire:click='back' class="back-btn">back</button>
                            <button class="submit-btn" type="submit">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
