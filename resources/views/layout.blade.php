<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Магазин вязаных вещей</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon-->
    <link rel="shortcut icon" href="images/icon/favicon.png" type="image/x-icon">

    <!-- Web Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Pacifico%7CSource+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;amp;subset=latin-ext,vietnamese" rel="stylesheet">

    @include('css')

</head>
<body class="home green-shop-home">
<div id="preloaderKDZ"></div>
<div class="yolo-site">

    @include('pages.header')

    @yield('content')

</div>
<!-- .mv-site-->

<div class="popup-wrapper">
</div>
<!-- .popup-wrapper-->
<div class="click-back-top-body">
    <button type="button" class="sn-btn sn-btn-style-17 sn-back-to-top fixed-right-bottom"><i class="btn-icon fa fa-angle-up"></i></button>
</div>

@include('scripts')

</body>
</html>

