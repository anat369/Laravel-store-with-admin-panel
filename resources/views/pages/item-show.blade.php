@extends('layout')

@section('title', $item->meta_title)
@section('meta_description', $item->meta_description)
@section('meta_keywords', $item->meta_keyword)

@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-shop" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>{{$item->category->title}}</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">{{$item->category->title}}</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Main Wrapper Header -->

    <!-- Main Container -->
    <div class="main-wrapper">

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>
            <div class="col-md-12">
                @if(session('status'))
                    <div class="alert alert-info">
                        {{session('status')}}
                    </div>
                @endif
            </div>

            <div class="row">

                <div class="col-sm-6">

                    <!-- Product Carousel Sync -->
                    <div id="full-sync" class="owl-carousel">
                        <div class="item">
                            <!-- Overlay Img -->
                            <div class="overlay-wrapper">
                                <img alt="Product 1" src="/uploads/items/{{$item->image}}">
                                <div class="overlay-wrapper-content">
                                    <div class="overlay-details">
                                        <a class="color-white" href="/uploads/items/{{$item->image}}" data-lightbox="image"><span class="livicon" data-n="plus"  data-color="#ffffff" data-hovercolor="#ffffff" data-op="1" data-onparent="true"></span></a>
                                    </div>
                                    <div class="overlay-bg bg-color-dark"></div>
                                </div>
                            </div>
                            <!-- Overlay Img -->
                        </div>
                    </div>
                    <!-- /Product Carousel Sync -->
                    <div class="white-space space-big"></div>
                </div>

                <div class="col-sm-6">
                    <div class="product-info">
                        <h3 class="fancy-title"><span>{{$item->title}}</span></h3>
                        <div class="rating">
                        </div>
                        <p class="product-price">{{$item->price}}</p>
                        <p>{!! $item->description!!}</p>
                        <ul class="divider-list list-unstyled">
                            <li><strong>Категория:</strong> <a href="{{route('category.show', $item->category->slug)}}">{{$item->category->title}}</a></li>
                            <li><strong>Цвет:</strong> <a href="#">{{$item->color}}</a></li>
                            <li><strong>Материал:</strong> <a href="#">{{$item->material}}</a></li>
                        </ul>

                        <div class="white-space space-xsmall"></div>

                        <form method="POST" class="add-to-cart">
                            {{ csrf_field() }}
                                    <input type="hidden" name="itemId" value="{{$item->id}}"/>
                            <input type="submit" class="form-control btn btn-primary" value="Добавить в корзину">
                        </form>
                    </div>

                    <div class="white-space space-big"></div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Tabs -->
                    <ul class="tabs-alt nav nav-tabs nav-justified" role="tablist">
                        <li class="active"><a href="#description" role="tab" data-toggle="tab">Описание</a></li>
                        <li><a href="#information" role="tab" data-toggle="tab">Дополнительная информация</a></li>
                        <li><a href="#reviews" role="tab" data-toggle="tab">Отзывы</a></li>
                    </ul>

                    <div class="tabs-alt tab-content">
                        <div class="tab-pane active" id="description">
                            {!! $item->description !!}
                        </div>
                        <div class="tab-pane" id="information">
                        </div>
                        <div class="tab-pane" id="reviews">

                            <h4 class="fancy-title"><span>{{$countReviews}}</span></h4>

                            @if($reviews)
                                <ul class="media-list ratings">
                                    @foreach($reviews as $review)
                                    <li class="media">
                                        <a class="pull-left" href="#"><img class="media-object" src="{{$review->user->getImage()}}" title="{{$review->user->name}}"></a>
                                        <div class="media-body">
                                            <h4 class="media-heading">{{$review->title}}<span class="rating-date">{{$review->created_at->diffForHumans()}}</span></h4>
                                            <p>{{$review->message}}</p>
                                        </div>
                                        <div class="rating-final">
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if(Auth::check())
                            <p class="lead text-center">Оставьте свой отзыв</p>
                                    <!-- Form -->
                                <form class="form-horizontal" role="form" method="post" action="/addReview">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="hidden" name="item_id" value="{{$item->id}}">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" placeholder="Заголовок" name="title">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="5" placeholder="Текст" name="message"></textarea>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" class="btn btn-primary" value="Отправить">
                                        </div>
                                    </div>
                                </form>
                                <!-- /Form -->
                                @else
                                <p>Чтобы оставить отзыв <a href="/login">войдите</a> или <a href="/register">зарегистрируйтесь</a>!</p>
                            @endif




                        </div>
                    </div>
                    <!-- /Tabs -->
                    <div class="white-space space-medium"></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="fancy-title"><span>Последние товары</span></h3>
                    <!-- Carousel -->
                    <div class="carousel-box" >
                        <div class="carousel carousel-nav-out carousel-simple" data-carousel-autoplay="false" data-carousel-items="4" data-carousel-nav="true" data-carousel-pagination="false"  data-carousel-speed="1000">
                            @foreach($lastItems as $item)

                                @include('pages.block-item')

                            @endforeach
                        </div>
                    </div>
                    <!-- /Carousel -->
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection