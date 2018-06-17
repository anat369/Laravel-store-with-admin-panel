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
            <div class="slider-instagram">
                <div data-number="8" data-margin="0" data-loop="no" data-navcontrol="yes" class="begreen-owl-carousel">
                    <div><a href="#"><img src="images/demo/instagram-1.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-2.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-3.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-4.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-5.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-6.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-7.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-8.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-6.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-7.jpg" alt="instagram"/></a></div>
                    <div><a href="#"><img src="images/demo/instagram-8.jpg" alt="instagram"/></a></div>
                </div>
                <div class="slider-instagram-absolute-1 container">
                    <div class="slider-instagram-absolute-1-content">
                        <h3>Instagram.</h3>
                    </div>
                </div>
                <div class="slider-instagram-absolute-2 container">
                    <div class="slider-instagram-absolute-2-content"><a href="#" class="btn btn-11">@begreen.yolo</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="div-box">
            <footer id="yolo-footer-wrapper">
                <div class="yolo-footer-wrapper footer-3">
                    <div class="footer-col">
                        <h2><a href="index.html" class="logo"><img src="images/logo/logo-footer.png" alt="logo1"
                                                                   width="84" height="63"
                                                                   class="vc_single_image-img attachment-full"/></a>
                        </h2>
                        <ul id="social-footer">
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <p class="copyright">BeGreen © Yolo 2016 Copyright, All Right Reserved 2016 Designed by <a
                                    href="#">Yolo</a></p>
                    </div>
                </div>
            </footer>
        </div>

    </div>
@endsection