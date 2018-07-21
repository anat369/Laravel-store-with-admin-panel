@extends('layout')
@section('content')

    <!-- Main Container -->
    <div class="main-wrapper">

        <!-- Container -->
        <div class="container">
            <div class="white-space space-big"></div>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="fancy-title"><span>Введите данные для регистрации</span></h4>

                @include('admin.errors')

                <!-- Form -->
                    <form class="form-horizontal animation fadeInRight" role="form" method="post" action="/register">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="name" class="form-control" name="name" value="{{old('name')}}" placeholder="Имя">
                            </div>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Электронная почта">
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control" name="password" type="password" placeholder="Пароль">
                            </div>
                            <div class="col-sm-12">
                                <input type="password" class="form-control"  placeholder="Подтвердите пароль">
                            </div>
                            <div class="col-sm-12">
                                <input name="register" type="submit" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                    <!-- /Form -->

                    <div class="white-space space-small"></div>
                </div>
            </div>

            <div class="white-space space-medium"></div>
        </div>
        <!-- /Container -->

    </div>
    <!-- /Main Container -->

@endsection