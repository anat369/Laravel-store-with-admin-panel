@extends('layout')

@section('content')
    <div id="example-wrapper" class="product my-account">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="images/background/bg-banner.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>My Account</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>Shop </p>
                        <p>NewThe </p>
                        <p>My Account</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box mb mt">
            <div class="container">
                <div class="customer_login_form_wrap">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <h2>Мой профиль</h2>
                    <p class="mb-20">Изменить данные профиля</p>

                    @include('admin.errors')

                    <form method="post" class="login" action="/profile" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <p class="form-row form-row-wide">
                            <label for="name" class="mb-20">Введите ваше имя</label>
                            <input id="name" name="name" value="{{$user->name}}" type="text"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="email" class="mb-20">Введите адрес электронной почты</label>
                            <input id="email" name="email" value="{{$user->email}}" type="email"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="password" class="mb-20 mt-20">Введите пароль</label>
                            <input id="password" name="password" type="password"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="avatar" class="mb-20 mt-20">Загрузите картинку для вашего профиля</label>
                            <input type="file" class="btn btn-primary" id="avatar" name="avatar">
                        <div class="col-md-12">
                            <h4 style="text-shadow: 0 1px 0 #ccc,
                                                               0 1px 0 #c9c9c9,
                                                               0 1px 0 #bbb,
                                                               0 1px 0 #b9b9b9,
                                                               0 1px 0 #aaa,
                                                               0 1px 1px rgba(0,0,0,.1),
                                                               0 0 5px rgba(0,0,0,.1),
                                                               0 1px 3px rgba(0,0,0,.3),
                                                               0 3px 5px rgba(0,0,0,.2),
                                                               0 1px 10px rgba(0,0,0,.25),
                                                               0 1px 10px rgba(0,0,0,.2),
                                                               0 1px 20px rgba(0,0,0,.15);">
                                Загружайте только картинки!
                            </h4>
                        </div>
                        </p>
                        <br>
                        <p class="form-row mt-20 mb-20">
                            <input name="Обновить" type="submit" class="button"/>
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="div-box">
            @include('footer')
        </div>

    </div>
@endsection