<x-layout>
    <div class="container">
        <div class="row justify-content-center bg-info">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-1 mt-4">Modifica articolo {{$article->title}}
                </h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 shadow p-5">
                {{-- <livewire:edit-form articleId="{{$article->id}}"/> --}}
                {{-- Sinstassi per passare un oggetto
                :<nome inventato> = "<oggetto>" --}}
                <livewire:edit-form :articleObject="$article"/>
            </div>
        </div>
    </div>

</x-layout>