@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                @include('pages._sidebar')
            </div>

        <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Title -->
                <h1 class="mt-4">{{$article->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by
                    <a href="#">Admin</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p> {{$article->created_at->diffForHumans()}}</p>
                @forelse($article->tags()->get() as $tag)
                    <a href="{{ route('tag.show', $tag->slug) }}" class="badge badge-light"><i class="fa fa-tag" aria-hidden="true"></i> {{$tag->title}}</a>

                @empty
                    <div style="text-align: left">No tags</div>


                @endforelse

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{ Voyager::image( $article->image ) }}" alt="{{$article->title}}">

                <hr>

                {!! $article->body !!}

                <!--hr>

                <h3>Комментарии</h3>
                {{--

                @if(isset($comments['root']))
                    @include ('comments.list', ['collection' => $comments['root']])
                @endif
                @if (Auth::check())
                    @include ('comments.form')
                @else
                    <div class="alert alert-warning" role="alert">
                       Авторизуйтесь, чтобы оставлять комментарии
                    </div>
                @endif

                --}}

                -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection








