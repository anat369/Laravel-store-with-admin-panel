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
                    <h2>Регистрация</h2>

                    @include('admin.errors')

                    <form method="post" class="login" action="/register">
                        {{csrf_field()}}
                        <p class="form-row form-row-wide">
                            <label for="name" class="mb-20">Введите ваше имя</label>
                            <input id="name" name="name" value="{{old('name')}}" type="text"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="email" class="mb-20">Введите адрес электронной почты</label>
                            <input id="email" name="email" value="{{old('email')}}" type="email"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <label for="password" class="mb-20 mt-20">Введите пароль<span
                                        class="required">*</span></label>
                            <input id="password" name="password" type="password"
                                   class="product-begreen-input product-begreen-input-text input-text"/>
                        </p>
                        <p class="form-row mt-20 mb-20">
                            <input name="login" type="submit" class="button"/>
                        </p>
                        <p class="product-begreen-lostpassword lost_password"><a href="#">Forgot your password?</a></p>
                    </form>
                </div>
            </div>
        </div>

        <div class="div-box">
            @include('footer')
        </div>

    </div>
@endsection