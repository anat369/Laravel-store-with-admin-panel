<!DOCTYPE html>
<html lang="ru" >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Meta -->
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />
    <meta name="author" content="@yield('author')">
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="3 days" />



    <meta property="og:image" content="@yield('image')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('meta_description')" />
    <title>@yield('title')</title>

    <!-- Styles -->

    @include('css')



    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/ico/favicon.png">

</head>

<body class="bg-pattern1" data-spy="scroll" data-target=".navbar">
<div id="preloader"></div>

<!-- Page Main Wrapper -->
<div class="page-wrapper" id="page-top">

    <!-- Header Container -->
        @include('pages.header')
    <!-- /Header Container -->

   @yield('content')

    <!-- Footer Container -->
    @include('footer')
    <!-- /Footer Container -->

</div>

<!-- Back To Top -->
<a href="#page-top" class="scrollup smooth-scroll" ><span class="fa fa-angle-up"></span></a>
<!-- /Back To Top -->


<!-- Javascripts
================================================== -->

@include('scripts')

<script>
    // добавление товара в корзину
    jQuery(document).ready(function($) {
        $('.add-to-cart').click(function () {
            var itemId = $(this).data('id');
            var el = $(this);
            $.ajax({
                type: 'POST',
                url: '/addCart',
                data: {_token: "{{ csrf_token() }}", itemId: itemId},
                success: function (response) {
                    $("#cart-count").html(response);
                }
            });
            return false;
        });
    });
</script>
<script>
    // добавление и удаление товара из избранного
    jQuery(document).ready(function($) {
        $('.favorites').click(function () {
            var el = $(this);
            var itemId = $(this).data('id');
            $.ajax({
                type: 'POST',
                url: '/favoriteItem',
                data: {_token: "{{ csrf_token() }}", itemId: itemId},
                success: function (response) {
                    if (response.added) {
                        el.attr('title', 'Добавить в избранное');
                        el.html('<span class="fa fa-heart" aria-hidden="true"></span>');
                    } else  {
                        el.attr('title', 'Удалить из избранного');
                        el.html('<span class="fa fa-heart-o" aria-hidden="true"></span>');
                    }
                }
            }, 'json');

            return false;
        });
    });

</script>

<script>
    // удаление товара из корзины
    jQuery(document).ready(function($) {
        $('.deleteItem').click(function () {
            var itemId = $(this).data('id');
            var el = $(this);
            $.ajax({
                type: 'POST',
                url: '/deleteCart',
                data: {_token: "{{ csrf_token() }}", itemId: itemId},
                success: function (response) {
                    $("#"+itemId).hide();
                    $("#cart-count").html(response);
                    console.log(response);
                }
            });
            return false;
        });
    });

</script>

<script>
    jQuery(document).ready(function($){
        $(".user-phone").mask("+7 (999) 999-99-99");
    });
</script>
<script>
    jQuery(document).ready(function($) {
        $('.contactForm').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/contactForm',
                data: $('.contactForm').serialize(),
                success: function(data){
                    $('.messages').html(data.success('Сообщение успешно отправлено!')); // выводим ответ сервера
                }
            });

            return false;
        });
    });
</script>

</body>
</html>
