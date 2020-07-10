
    <!-- Search Widget -->
    <!--div class="card my-4">
        <h5 class="card-header">Поиск</h5>
        <div class="card-body">
            <div class="input-group">
                <form action="{{ route('search') }}" class="form-inline">
                    <input type="text" class="form-control" name="q" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="submit">Поиск</button>
                    </span>
                </form>
            </div>
        </div>
    </div-->

    <!-- Categories Widget -->
    <div class="card my-3">
        <h5 class="card-header">Категории</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('partials.categories')
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Widget -->
    <div class="card my-3">
        <h5 class="card-header">Тэги</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled mb-0">
                        @foreach($tags as $tag)
                            <li><a href="{{ route('tag.show', $tag->slug) }}">{{$tag->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Видео</a></li>
                <li class="list-group-item"><a href="#">Клинические случаи</a></li>
                <li class="list-group-item"><a href="#">Вебинары</a></li>
                <li class="list-group-item"><a href="#">Книги</a></li>
                <li class="list-group-item"><a href="#">Магазин</a></li>
            </ul>
        </div>
    </div>
    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">banner</h5>
        <div class="card-body">
            <img class="card-img-top"
                 src="https://implantshop.ru/upload/resize_cache/iblock/a57/418_361_2/a57c838c05259db1125d4216cad0f48f.jpg"
                 alt="Card image cap">
        </div>
    </div>
