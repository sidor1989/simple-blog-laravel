<div class="card my-4">
    <h5 class="card-header">Оставьте свой комментарий</h5>
    <div class="card-body">
        <form method="POST" action="{{ route('article.comment', $article->id) }}">
            @csrf
            @if (isset($parentId))
                <input name="parent_id" type="hidden" value="{{ $parentId }}">
            @endif
            <div class="form-group">
                <textarea class="form-control" rows="3" name="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
</div>
