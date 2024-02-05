<div>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mt-4">Scrivi il tuo articolo</h1>
            </div>
        </div>
    </div>
    
    <form wire:submit="store">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titolo:</label> {{$title}}
            <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" wire:model.live="title">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Testo:</label> {{$body}}
            <textarea id="inputBody" cols="30" rows="10" class="form-control" wire:model.live="body"></textarea>
            @error('body') <span class="error">{{ $message }}</span> @enderror

        </div>

        <button type="submit" class="btn btn-primary">Invia articolo</button>
    </form>
    
</div>