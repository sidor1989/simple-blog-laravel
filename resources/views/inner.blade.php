@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('pages._sidebar')

            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                @include('partials.article-list' , ['articles' => $articles])
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection








