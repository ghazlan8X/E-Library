<div>
    <section id="hero">
        <div class="container">
            @auth
                <p>Hi {{ Auth::user()->name }} Welcome To NaviBook</p>
                <br>

                <p>You Are {{ Auth::user()->role }} </p>

                {{-- @if (Auth::user()->role === 'user')
                    <p>you are user</p>
                @endif --}}

                <br>
            @endauth

            <p>We Have Users</p>
            <p>Books count {{ count($books) }}</p>
        </div>
    </section>

    <section id="BooksList">
        <div class="container">
            <div class="BooksList">
                @foreach ($books as $book)
                    <div wire:click='detail({{ $book->id }})' class="card">
                        <img src="{{ Storage::url($book->photo) }}" alt="{{ $book->title }}">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
