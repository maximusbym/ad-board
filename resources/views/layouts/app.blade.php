<html>
<head>
    <title>Оголошення - @yield('title')</title>
</head>
<body>

<header>
    <div class="nav">
        <ul>
            <li><a href="{{ route('main') }}">Головна</a></li>
            <li><a href="{{ route('catalog') }}">Каталог</a></li>
            <li><a href="{{ route('about') }}">Про нас</a></li>
        </ul>
    </div>
</header>


<div class="container">
    @yield('content')
</div>

</body>
</html>