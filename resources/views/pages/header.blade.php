<?php
$categories = \App\Category::all();
$pidCats = \App\Category::getParentCategory();
?>
<header class="header yolo-header-style-3">
    <div class="yolo-top-bar">
        <div class="container">
            <div class="row">
                <div class="top-sidebar top-bar-left col-md-4">
                    <aside id="text-11" class="widget widget_text">
                        <div class="textwidget">
                            <div>Продажа вязаных вещей ручной работы</div>
                        </div>
                    </aside>
                </div>
                <div class="top-sidebar top-bar-right col-md-8">
                    <aside id="text-6" class="widget widget_text">
                        <div class="textwidget"><i class="fa fa-home"></i> г. Москва , м. Алтуфьево<i
                                    style="margin-left: 15px" class="fa fa-phone"></i> + 7-999-999-99-99<i
                                    style="margin-left: 15px" class="fa fa-envelope"><a href="mailto:test@test.ru"> Тестовая почта</a></i>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <div class="yolo-header-top yolo-header-top-style-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-logo">
                        <h1><a href="/"><img src="/images/logo/logo.png" alt="logo"/></a></h1>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="header-customize header-customize-right">
                        <div class="custom-text-wrapper header-customize-item"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            Индивидуальный подход к каждому клиенту
                        </div>
                        <div class="shopping-cart-wrapper header-customize-item with-price">
                            <div class="widget_shopping_cart_content">
                                <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span
                                            class="total">0</span></div>
                                <div class="sub-total-text"><span
                                            class="product-begreen-price-amount amount"></span></div>
                                <div class="cart_list_wrapper">
                                    <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                        <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                            <li class="empty">
                                                <h4>Ваша корзина пуста</h4>
                                                <p>Вы не добавили ни одного товара</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="col-3 text-left"><a href="#primary-menu"><i class="fa fa-bars"></i></a></div>
        <div class="col-3 text-center">
            <div class="logo">
                <h1><a href="/"><img src="images/logo/logo.png" alt="logo"/></a></h1>
            </div>
        </div>
        <div class="col-3 text-right">
            <div class="header-right">
                <div class="search-button-wrapper header-customize-item style-default">
                </div>
                <div class="shopping-cart-wrapper header-customize-item with-price">
                    <div class="widget_shopping_cart_content">
                        <div class="widget_shopping_cart_icon"><i class="wicon fa fa-shopping-bag"></i><span
                                    class="total">0</span></div>
                        <div class="cart_list_wrapper">
                            <div class="scroll-wrapper cart_list product_list_widget scrollbar-inner">
                                <ul class="cart_list product_list_widget scrollbar-inner scroll-content">
                                    <li class="empty">
                                        <h4>An empty cart</h4>
                                        <p>You have no item in your shopping cart</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">

            <div class="main-nav-wrapper">
                <div class="header-left">
                    <nav id="primary-menu" class="main-nav">
                        <ul class="nav">
                            <li class="active menu-item menu-home"><a href="/">Главная</a>
                            </li>

                            @foreach($pidCats as $pidCat)
                                <li class="menu-item menu-shop"><a
                                            href="/category/{{$pidCat->slug}}">{{$pidCat->title}}</a>
                                    <ul class="sub-menu">
                                        <li class="menu_style_dropdown menu-item">
                                            <ul class="sub-menu">
                                                @foreach($categories as $category)
                                                    @if($category->pid == $pidCat->id)
                                                    <li class="menu-item menu-item-object-page">
                                                        <a href="/category/{{$category->slug}}">
                                                            {{$category->title}}
                                                        </a>
                                                    </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            @endforeach

                            <li class="menu-item menu-blog"><a href="/blog">Блог</a></li>
                            @if(Auth::check())
                                <li class="menu-item"><a href="/profile">Мой профиль</a></li>
                                <li class="menu-item"><a href="/logout">Выход</a></li>
                            @else
                                <li class="menu-item"><a href="/register">Регистрация</a></li>
                                <li class="menu-item"><a href="/login">Вход</a></li>
                            @endif
                            <li class="menu-item menu-blog"><a href="/contact">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- .header-main-nav-->
                </div>
            </div>

        </div>
    </div>
</header>
