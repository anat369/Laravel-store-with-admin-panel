@extends('layout')
@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-shop" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>Избранные товары</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Избранные товары</li>
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
                <div class="col-md-9">
                    @if($favoriteItems)
                        <table class="table cart-table table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Название</th>
                                <th>Цена</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($favoriteItems as $item)

                                <tr>
                                    <td class="td-cart-image"><img src="/uploads/items/{{$item->image}}"
                                                                   alt="Product"></td>
                                    <td><a href="{{route('item.show', $item->slug)}}">{{$item->title}}</a></td>
                                    <td>{{$item->price}} р.</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>У вас нет избранных товаров.</p>
                    @endif
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->

@endsection