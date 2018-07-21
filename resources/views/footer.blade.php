<div class="footer-wrapper">

    <!-- Footer Top Container -->
    <div class="footer-top">

        <!-- Google Map -->
        <a class="gmap-button">Показать на карте</a>
        <div class="gmap-wrapper">
            <div id="google-map-footer"></div>
        </div>
        <!-- /Google Map -->

    </div>
    <!-- /Footer Top Container -->

    <!-- Footer Bottom Container -->
    <div class="footer-bottom">

        <!-- Container -->
        <div class="container">

            <div class="row">
                <!-- Footer Menu -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="menu-footer">
                        <ul class="list-inline">
                            <li><a href="/" rel="nofollow">Главная</a></li>
                            @if(Auth::check())
                                <li><a href="/profile" rel="nofollow">Мой профиль</a></li>
                                <li><a href="/logout" rel="nofollow">Выход</a></li>
                            @else
                                <li><a href="/register" rel="nofollow">Регистрация</a></li>
                                <li><a href="/login" rel="nofollow">Вход</a></li>
                            @endif
                            <li><a href="/blog" rel="nofollow">Блог</a>
                            </li>
                            <li><a href="/contact" rel="nofollow">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Footer Menu -->
                <!-- Copyright -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="copyright">
                        <p>© <?= date('Y')?> - Mahdi | Все права защищены</p>
                    </div>
                </div>
                <!-- /Copyright -->
                <!-- Footer Social -->
                <div class="col-md-12 col-sm-12 columns">
                    <div class="social-footer">
                        <ul class="list-inline social-list">
                            <li><a href="" class="ToolTip" title="Вконтакте"><span class="fa fa-vk"></span></a></li>
                            <li><a href="" class="ToolTip" title="Инстаграм"><span class="fa fa-instagram"></span></a></li>
                            <li><a href="" class="ToolTip" title="Фейсбук"><span class="fa fa-facebook"></span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /Footer Social -->
            </div>

        </div>
        <!-- /Container -->

    </div>
    <!-- /Footer Bottom Container -->

</div>
