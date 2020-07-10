<ul>
    @foreach($categories as $category)
        <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->title }}</a>
            @if(count( $category->children) > 0 )
                @include('partials.categories', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>