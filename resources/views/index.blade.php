@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://via.placeholder.com/800x150" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide</h5>
                                <p>Use data attributes to easily control the position of the carousel. data-slide
                                    accepts the keywords prev or next, which alters the slide position relative to its
                                    current position.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://via.placeholder.com/800x150" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide</h5>
                                <p>Use data attributes to easily control the position of the carousel. data-slide
                                    accepts the keywords prev or next, which alters the slide position relative to its
                                    current position.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://via.placeholder.com/800x150" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide</h5>
                                <p>Use data attributes to easily control the position of the carousel. data-slide
                                    accepts the keywords prev or next, which alters the slide position relative to its
                                    current position.</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('pages._sidebar')

            </div>
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <div class="container">

                    <!-- Heading Row -->
                    <div class="row align-items-center my-5">


                        <div class="col-lg-7">
                            <h1 class="font-weight-light">Главная</h1>
                            <p>Уважаемые коллеги, этот сайт
                                создан для, …………на этом
                                сайте Вы найдете и так
                                далее………..
                            </p>
                            <a class="btn btn-primary" href="#">Call to Action!</a>
                        </div>
                        <div class="col-lg-5">
                            <img class="img-fluid rounded mb-4 mb-lg-0" src="https://kamil.guru/storage/img/Screenshot_4.jpg" alt="">
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                @include('partials.article-list' , ['articles' => $articles])
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


@endsection








