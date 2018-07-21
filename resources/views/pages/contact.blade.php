@extends('layout')

@section('content')
    <!-- Main Wrapper Header -->
    <div class="main-wrapper-header fancy-header dark-header parallax parallax-breadcrumbs" data-stellar-background-ratio="0.4">

        <div class="bg-overlay bg-overlay-gdark"></div>

        <div class="container">

            <div class="row">
                <div class="col-sm-12 columns">
                    <div class="page-title">
                        <h2>Контакты</h2>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li class="active">Контакты</li>
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
                <div class="col-md-6">
                    <h3 class="fancy-title"><span>Контактная информация</span></h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-default fa-ul">
                                <li><span class="fa-li fa fa-phone color-default"></span>(123) 456-7890</li>
                                <li><span class="fa-li fa fa-envelope color-default"></span>gmail@gmail.com</li>
                                <li><span class="fa-li fa fa-clock-o color-default"></span><strong>Понедельник - Пятница:</strong> 09:00 - 18:00</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-default fa-ul">
                                <li><span class="fa-li fa fa-map-marker color-default"></span>Россия, г. Москва, ул. Лобанова, 8, Москва, 115432 </li>
                                <li><span class="fa-li fa fa-envelope color-default"></span>gmail@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="white-space space-small"></div>
                </div>
                <div class="col-md-6">
                    <h3 class="fancy-title"><span>Написать нам!</span></h3>

                {{Form::open(['route' => 'contactForm', 'method' => 'post'])}}
                <!-- Form -->
                    <form class="form-horizontal animation fadeInRight contactForm">
                        {{ csrf_field() }}
                        <div class="form-group">
                            @include('pages.errors')
                            <div class="col-sm-6">
                                <input type="name" class="form-control" name="name" placeholder="Имя">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" name="email" placeholder="Электронный адрес">
                            </div>
                            <div class="col-sm-12">
                                <input type="phone" class="form-control user-phone" name="phone" placeholder="Телефон">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="5" name="description" placeholder="Сообщение"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <input type="submit" class="form-control btn btn-primary" value="Отправить сообщение">
                            </div>
                        </div>
                    </form>
                    <!-- /Form -->
                    {{Form::close()}}

                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="white-space space-medium"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->
@endsection