
    <h1 class="my-4">Статьи
        <small>mbuga za wanyama</small>
    </h1>
@forelse($articles as $article)
    <!-- Blog Post -->
        <div class="card mb-4">
            <img class="card-img-top" src="{{ Voyager::image( $article->image ) }}" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title">{{$article->title}}</h2>
                <p class="card-text">{{$article->excerpt}}</p>
                <a href="{{ route('article.show', $article->slug) }}" class="btn btn-primary">Читать →</a>
            </div>
            <div class="card-footer text-muted">
                {{$article->created_at->diffForHumans()}}
                <a class="float-right" href="{{ route('article.show', $article->slug) }}">
                    <!--i class="fa fa-comment" aria-hidden="true"></i--> {{-- $article->comments_count --}}
                </a>
            </div>
        </div>

    @empty
        <div style="text-align: left">No items found</div>


    @endforelse
    {{ $articles->links() }}
