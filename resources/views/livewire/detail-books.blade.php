<div>
    <section id="DetailBooks">
        <div class="card">
            <div class="card-header">
                <h1>{{ $detailbooks->title }}</h1>
            </div>

            <div class="card-body">
                <div class="">
                    <img src="{{ Storage::url($detailbooks->photo) }}" alt="">
                </div>

                <div>
                    
                </div>
            </div>
            
            <div class="card-footer">
                <button wire:click='EditBooks({{ $detailbooks->id }})'>Edit</button>
                <button wire:click='DeleteBooks({{ $detailbooks->id  }})'>Delete</button>
            </div>
        </div>
    </section>
</div>
