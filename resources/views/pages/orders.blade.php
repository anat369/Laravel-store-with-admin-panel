@extends('layout')
@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-shop" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>Заказы</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Заказы</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- /Main Wrapper Header -->

    <!-- Main Container -->
    <div class="main-wrapper">
<pre>
<!--    --><?php //print_r($order)?>
</pre>
        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>
            
            <div class="row">
                <div class="col-md-9">
                    @if($orders)
                        <table class="table cart-table table-hover">
                            <thead>
                            <tr>
                                <th>Дата заказа</th>
                                <th>Сумма</th>
                                <th>Статус</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->created_at->formatLocalized("%d %B %Y")}}</td>
                                    <td>{{$order->price}} р.</td>
                                    <td>{{$order->status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        Заказов пока нет.
                    @endif
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->

@endsection