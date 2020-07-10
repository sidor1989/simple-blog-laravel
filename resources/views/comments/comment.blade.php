<!-- Comment with nested comments -->
<div class="media mb-4">
    <img class="d-flex mr-3 rounded-circle" src="{{ $comment->getAvatar($comment->user_id) }}" alt="">
    <div class="media-body">
        <h5 class="mt-0">{{ $comment->owner->name }}</h5>
        {{ $comment->body }}

        @if (Auth::check())
            <a class="btn btn-link" data-toggle="collapse" href="#commentForm{{$comment->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ответить
            </a>
            <div class="collapse" id="commentForm{{$comment->id}}">
                @include ('comments.form', ['parentId' => $comment->id])
            </div>
        @endif

        @if (isset($comments[$comment->id]))
            @include ('comments.list', ['collection' => $comments[$comment->id]])
        @endif

    </div>
</div>





