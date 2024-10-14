<div>
    <section class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Subtitle</th>
                            <th scope="col">Body</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                            <th scope="row">{{$article->id}}</th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->subtitle}}</td>
                            <td>{{$article->body}}</td>
                            <td><img class="img-fluid img-resized" src="{{Storage::url($article->img)}}" alt="Immagine {{$article->title}}"></td>
                            <td>
                                <a href="{{route('articles.show', compact('article'))}}" class="btn btn-info">Show</a>
                                <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-warning">Edit</a>
                                <button wire:click="destroy({{$article}})" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>