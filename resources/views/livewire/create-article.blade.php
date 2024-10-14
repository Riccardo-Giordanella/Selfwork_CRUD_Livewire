<div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <form wire:submit.prevent="store" enctype="multipart/form-data" class="my-5 p-3 rounded shadow">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        <div class="bg-danger rounded text-center my-1">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        <div class="bg-danger rounded text-center my-1">@error('subtitle') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        <div class="bg-danger rounded text-center my-1">@error('body') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine dell'articolo</label>
                        <input type="file" wire:model="img" class="form-control">
                        <div class="bg-danger rounded text-center my-1">@error('img') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Crea</button>
                </form>
            </div>
        </div>
    </div>
</div>
