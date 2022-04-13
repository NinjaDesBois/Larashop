<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="mironcoder">
    <meta name="email" content="sohaibbahassi@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="template" content="Ecomart">
    <meta name="title" content="Ecomart - eCommerce HTML Template">
    <meta name="keywords" content="html, ecomart, ecommerce, clothing, food, electronics, minimal, beauty, shopping, simple, fashion, single vendor, multipurpose, store, shop">
    <title>Larashop</title>
    <link rel="icon" href="../../images/favicon.png">
    <link rel="stylesheet" href="../../fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="../../fonts/flaticon/grocery/flaticon.css">
    <link rel="stylesheet" href="../../css/vendor/slick.css">
    <link rel="stylesheet" href="../../css/vendor/bootstrap.css">
    <link rel="stylesheet" href="../../css/custom/main.css">
    <link rel="stylesheet" href="../../css/custom/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    
        
    
    @include('partials.header')
    @include('partials.nav')
    @include('partials.aside')
    
   
    @yield('content')
   


    @include('partials.footer')
    @include('flashy::message')
</body>

</html>