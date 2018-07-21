@extends('layout')

@section('content')

        <div class="main-wrapper">

            <!-- Container -->
            <div class="container">
                <div class="white-space space-big"></div>

                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fancy-title"><span>Изменить данные профиля</span></h4>

                    @include('admin.errors')

                    <!-- Form -->
                        <form class="form-horizontal animation fadeInRight" role="form" action="/updateProfile" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label class="mb-20">Имя</label>
                                    <input type="name" class="form-control" name="name" value="{{$user->name}}">
                                </div>
                                <div class="col-sm-12">
                                    <label class="mb-20">Адрес электронной почты</label>
                                    <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                </div>
                                <div class="col-sm-12">
                                    <label class="mb-20 mt-20">Пароль</label>
                                    <input type="password" class="form-control" name="password" type="password">
                                </div>
                                <div class="col-sm-12">
                                    <p class="form-row form-row-wide">
                                        <img src="{{$user->getImage()}}" alt="" width="200" class="img-responsive">
                                        <label class="mb-20 mt-20">Загрузите картинку для вашего профиля</label>
                                        <input type="file" class="btn btn-default" name="avatar">
                                    </p>
                                </div>
                                <div class="col-sm-12">
                                    <input name="profile" type="submit" class="form-control btn btn-primary">
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
@endsection