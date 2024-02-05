<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mt-4">Tutti i nostri articoli</h1>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->body}}</td>
                <td>
                    <button class="btn btn-danger" wire:click="destroy({{$article->id}})">Elimina</button>
                </td>
                </tr>
            @empty
                <p>Non ci sono articoli</p>
            @endforelse
        </tbody>
      </table>
</div>
