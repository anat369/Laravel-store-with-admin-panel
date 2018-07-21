@extends('layout')

@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-shop" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-dark bg-color-default"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>{{$category->title}}</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">{{$category->title}}</li>
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
            <div class="row">

                <!-- Content -->
                <div class="col-md-12">
                    <div class="white-space space-big"></div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-space space-small"></div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach($items as $item)
                            <div class="col-md-3">

                                @include('pages.block-item')

                                <div class="white-space space-small"></div>
                            </div>

                        @endforeach

                    </div>


                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="text-center">
                                {{$items->links()}}
                            </div>
                        </div>
                    </div>
                    <!-- /Pagination -->

                    <div class="white-space space-medium"></div>
                </div>
                <!-- /Content -->

            </div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection