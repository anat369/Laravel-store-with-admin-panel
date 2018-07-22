@extends('layout')
@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-shop" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>Корзина</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Корзина</li>
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
                    @if(session()->get('items'))
                    {!! Form::open(['route' => 'cartOrder']) !!}
                        {{ csrf_field() }}
                    <table class="table cart-table table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Сумма</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                        <tr class="itemCart" id="{{$item->id}}">
                            <td class="td-cart-image"><img src="/uploads/items/{{$item->image}}" alt="Product"></td>
                            <td><a href="{{route('item.show', $item->slug)}}">{{$item->title}}</a></td>
                            <td>{{$item->price}} р.</td>
                            <td>{{$item->count}}</td>
                            <td>{{$item->price * $item->count}} р.</td>
                            <td class="td-remove"><a href="#" class="deleteItem" data-id="{{$item->id}}"><div class="icon-wrapper icon-border-round fa-lg"><i class="fa fa-trash-o"></i></div></a></td>
                        </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="6" class="totalPrice">
                                <input type="hidden" value="{{ $totalPrice }}" name="price">
                                Общая стоимость заказа: {{ $totalPrice }} p.
                            </td>
                        </tr>
                        @if(Auth::check())
                            <tr>
                                <td colspan="6">
                                    <input type="submit" class="form-control btn btn-primary" value="Оформить заказ">
                                </td>
                            </tr>
                            @else
                            <tr>
                                <td colspan="6">
                                    <h4>Для оформления заказа <a href="/login">войдите</a> или <a href="/register">зарегистрируйтесь</a>!</h4>
                                </td>
                            </tr>
                            @endif
                        </tfoot>
                    </table>
                    {!! Form::close() !!}
                        @else
                    В корзине пока нет товаров.
                        @endif
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->

@endsection