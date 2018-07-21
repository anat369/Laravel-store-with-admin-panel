<div class="header-wrapper">
    <!-- Header Top Container -->
    <div class="header-top">

        <!-- Container -->
        <div class="container">

            <div class="row">
                <!-- Left -->
                <div class="col-md-6 col-sm-6 columns">
                    <div class="header-top-left">
                        <ul class="social-top">
                            <li><a href="#" class="ToolTip" title="Вконтакте"><span class="fa fa-vk"></span></a></li>
                            <li><a href="#" class="ToolTip" title="Инстаграм"><span class="fa fa-instagram"></span></a>
                            </li>
                            <li><a href="#" class="ToolTip" title="Фейсбук"><span class="fa fa-facebook"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Left -->

                <!-- Right -->
                <div class="col-md-6 col-sm-6 columns">
                    <div class="header-top-right">
                        <!-- Right Menu -->
                        <ul class="top-menu">
                            <li><a href="#"><i class="fa fa-phone"></i>7-496-455-23-23</a></li>
                            <li><a href="#"><i class="fa fa-mail-reply"></i>gmail@gmail.com</a></li>
                            <li><a href="/cart"><i class="fa fa-shopping-cart"></i>
                                    <span id="cart-count">{{$count}}</span></a></li>
                        </ul>

                        <!-- /Right Menu -->
                    </div>
                </div>
                <!-- /right -->

            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Header Top Container -->

    <!-- Header Main Container -->
    <div class="header-main">

        <!-- Container -->
        <div class="container">

            <!-- Main Navigation & Logo -->
            <div class="main-navigation">

                <div class="row">

                    <!-- Main Navigation -->
                    <div class="col-md-12 columns">

                        <nav class="navbar navbar-default gfx-mega nav-left" role="navigation">


                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>
                                <div class="logo">
                                    <a href="/"><img src="/img/theme/logo.png" alt="Logo"></a>
                                </div>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="gfx-collapse">
                                <ul class="nav navbar-nav gfx-nav">
                                    <li class="dropdown {{ Request::is('/') ? 'active' : '' }}"><a href="/">Главная</a>
                                    @foreach($parent_categories as $parent_category)
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle"
                                               data-toggle="dropdown"> {{$parent_category->title}}<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                @foreach($categories as $category)
                                                    @if($category->parent_id == $parent_category->id)
                                                        <li>
                                                            <a href="/category/{{$category->slug}}">{{$category->title}}</a>
                                                        </li>
                                                    @endif
                                                @endforeach

                                            </ul>
                                        </li>
                                    @endforeach
                                    @if(Auth::check())
                                        <li class="dropdown {{ Request::is('profile') ? 'active' : '' }}">
                                            <a href="/profile" class="dropdown-toggle" data-toggle="dropdown">Мой профиль<b class="caret"></b></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/orders">Заказы</a></li>
                                                <li>
                                                    <a href="{{ route('my_favorites') }}">Избранные товары</a>
                                                </li>
                                            </ul>
                                        </li>
                                        </li>
                                        <li class="dropdown"><a href="/logout">Выход</a></li>
                                    @else
                                        <li class="dropdown {{ Request::is('register') ? 'active' : '' }}"><a
                                                    href="/register">Регистрация</a></li>
                                        <li class="dropdown {{ Request::is('login') ? 'active' : '' }}"><a
                                                    href="/login">Вход</a></li>
                                    @endif
                                    <li class="dropdown {{ Request::is('blog') ? 'active' : '' }}"><a
                                                href="/blog">Блог</a>
                                    </li>
                                    <li class="dropdown {{ Request::is('contact') ? 'active' : '' }}"><a
                                                href="/contact">Контакты</a>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->

                        </nav>

                    </div>
                    <!-- /Main Navigation -->

                </div>

            </div>
            <!-- /Main Navigation & Logo -->

        </div>
        <!-- /Container -->

    </div>
    <!-- /Header Main Container -->

</div>
