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
                <h1 class="mt-4">{{ $page->title }}</h1>

                {!!  $page->body !!}
            </div>
        </div>
    </div>
@endsection








