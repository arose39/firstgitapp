<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title')</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet" >

    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">

</head>
<body >
<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">

        <a class="py-2 d-none d-md-inline-block" href="/">Главная</a>
        <a class="py-2 d-none d-md-inline-block" href="about">Про нас</a>
        <a class="py-2 d-none d-md-inline-block" href="review">Отзывы</a>


    </div>
</nav>

<div class="container">@yield('main_content')</div>


</body>
</html>
