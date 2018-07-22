@extends('layout')
@section('content')
    <!-- Main Container -->
    <div class="main-wrapper">

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-9">
                    <table class="table cart-table table-hover">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($favoriteItems as $item)
                            <tr class="itemCart" id="{{$item->id}}">
                                <td class="td-cart-image"><img src="/uploads/items/{{$item->image}}" alt="Product"></td>
                                <td><a href="{{route('item.show', $item->slug)}}">{{$item->title}}</a></td>
                                <td>{{$item->price}} р.</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                    </table>
                </div>
            </div>

            <div class="white-space space-big"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection