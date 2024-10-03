<div>
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$article->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
            <p class="card-text">{{$article->body}}</p>
            <a href="{{route('articles.index')}}" class="card-link">Torna indietro</a>
        </div>
    </div>
</div>
