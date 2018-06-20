@extends('layout')

@section('content')
    <div id="example-wrapper" class="page contact-us">
        <div class="div-box">
            <div class="banner-subpage">
                <figure><img src="images/background/bg-contact.jpg" alt="bg-banner"/></figure>
                <div class="banner-subpage-content">
                    <h2>Contact Us</h2>
                    <div class="desc">
                        <p>Home </p>
                        <p>Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-box support-contact mb">
            <div class="support-contact-content mb mt">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h2 class="text-center mb-45">Менеджер</h2>
                            <div class="row">
                                <div class="col-xs-4">
                                    <figure class="text-center"><img src="images/demo/about-us-page.png"
                                                                     alt="about-us-page"/></figure>
                                </div>
                                <div class="col-sx-8">
                                    <p><strong>Татьяна</strong></p>
                                    <p><i class="fa fa-skype color-00A8E8"> </i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <h2 class="mb-45">Социальные сети</h2>
                            <div class="social-share-wrap">
                                <ul class="social-share">
                                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h2 class="mb-45 text-center">Контакты</h2>
                            <div class="icon-box-style-9 mb-20">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p><i class="fa fa-map-marker"></i></p>
                                    </div>
                                    <div class="col-xs-11 pl-0">
                                        <p><strong>Адрес</strong></p>
                                        <p>г. Москва, м. Алтуфьево</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-style-9 mb-20">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p><i class="fa fa-phone"></i></p>
                                    </div>
                                    <div class="col-xs-11 pl-0">
                                        <p><strong>Телефон</strong></p>
                                        <p>+7-999-999-99-99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="icon-box-style-9 mb-20">
                                <div class="row">
                                    <div class="col-xs-1">
                                        <p><i class="fa fa-envelope"></i></p>
                                    </div>
                                    <div class="col-xs-11 pl-0">
                                        <p><strong>Почта</strong></p>
                                        <p><a href="mailto:test@test.ru">Тестовая почта</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div-box get-in-touch mb">
            <div class="container">
                <div class="get-in-touch text-center">
                    <h2 class="mb-45">Связаться с нами!</h2>
                </div>
                <form class="get-in-touch-form">
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                <input type="text" placeholder="Имя"/>
                            </p>
                            <p>
                                <input type="text" placeholder="Почта"/>
                            </p>
                            <p>
                                <input type="text" placeholder="Телефон"/>
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <textarea cols="30" rows="14" placeholder="Текст сообщения"></textarea>
                            </p>
                        </div>
                    </div>
                    <p class="text-right"><a href="#" class="btn btn-17">Отправить</a></p>
                </form>
            </div>
        </div>

        <div class="div-box">
            @include('footer')
        </div>

    </div>
@endsection