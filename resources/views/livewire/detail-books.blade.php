<div>
    <section id="DetailBooks">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $detailbooks->title }}</h1>
                </div>
    
                <div class="card-body">
                    <div class="card-img">
                        <img src="{{ Storage::url($detailbooks->photo) }}" alt="">
                    </div>
    
                    <div class="card-detail">
                        <div class="detail-item">
                            <h2>Writer</h2>
                            <div class="writer">
                                <p> {{ $detailbooks->writer }} </p>
                            </div>
                        </div>

                        <div class="detail-item">
                            <h2>Synopsis</h2>
                            <div class="synopsis">
                                <p> {{ $detailbooks->synopsis }} </p>
                            </div>
                        </div>
                        
                        <div class="detail-item">
                            <h2>Information</h2>
                            <div class="card-info">
                                <div class="row">
                                    <div class="info-item">
                                        <p> Publisher </p>
                                        <h3>{{ $detailbooks->publisher }}</h3>
                                    </div>
    
                                    <div class="info-item">
                                        <p> Release Date </p>
                                        <h3>{{ $detailbooks->release }}</h3>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="info-item">
                                        <p> ISBN </p>
                                        <h3>{{ $detailbooks->isbn }}</h3>
                                    </div>
    
                                    <div class="info-item">
                                        <p> Page </p>
                                        <h3>{{ $detailbooks->page }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button wire:click='back' class="back-btn">back</button>
                    <button wire:click='EditBooks({{ $detailbooks->id }})' class="edit-btn">Edit</button>
                    <button wire:click='DeleteBooks({{ $detailbooks->id  }})' class="delete-btn">Delete</button>
                </div>
            </div>
        </div>
    </section>
</div>
