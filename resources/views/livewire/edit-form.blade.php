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

    
    <form wire:submit="update">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Titolo:</label>
            <input type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" wire:model="title">
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Testo:</label>
            <textarea id="inputBody" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
            @error('body') <span class="error">{{ $message }}</span> @enderror

        </div>

        <button type="submit" class="btn btn-primary">Modifica articolo</button>
    </form>
    
</div>
