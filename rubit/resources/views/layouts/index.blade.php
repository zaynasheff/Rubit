<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand logo" href="{{url('/')}}">
              Miner Hotel
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{route('login')}}">Вход</a></li>
                    <li><a href="{{route('register')}}">Регистрация</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Выход
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="navigatiion">
        <ul class="nav-menu">
            <li>
                <a href="#">Оборудование</a>
            </li>
            <li>
                <a href="#">О нас</a>
            </li>
        </ul>
    </div>



    <div class="wrapper">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <form class="calc">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3>Купить ASIC AntMiner S9</h3>
                            <div class="quantity_block">
                                <label for="quantity_view">
                                    Сумма инвестиции, руб
                                </label>
                                <script type="text/javascript">
                                    function fun1() {
                                        var rng=document.getElementById('quantity');
                                        var num=document.getElementById('quantity_view');
                                        var df=document.getElementById('day_profit');
                                        var mf=document.getElementById('month_profit');
                                        var yf=document.getElementById('year_profit');

                                        num.value=rng.value;

                                        df.innerHTML = Math.round(num.value*0.0066666666666667);
                                        mf.innerHTML = Math.round(num.value*0.02);
                                        yf.innerHTML = Math.round(num.value*2.4);
                                    }

                                    function fun2() {

                                        var num=document.getElementById('quantity_view');
                                        var rng=document.getElementById('quantity');
                                        var df=document.getElementById('day_profit');
                                        var mf=document.getElementById('month_profit');
                                        var yf=document.getElementById('year_profit');

                                        rng.value=num.value;

                                        df.innerHTML = Math.round(num.value*0.0066666666666667);
                                        mf.innerHTML = Math.round(num.value*0.02);
                                        yf.innerHTML = Math.round(num.value*2.4);
                                    }

                                </script>
                                <input type="range" name="quantity" id="quantity" required="required" min="3500"
                                       max="7000000" step="3500" value="1"  oninput="fun1()">

                                <input type="number" id="quantity_view" min="3500"
                                       max="7000000" step="3500" value="3500" oninput="fun2()">
                            </div>
                            <input class="btn" type="submit" value="Купить">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3>Расчет доходности от добычи криптовалюты</h3>
                            <ul class="profit_calculation_list">
                                <li>
                                <span class="profit_calculation_type">
                                    Доход в день:
                                </span>
                                    <span class="profit_calculation_value" id="day_profit" >23</span><span class="rouble">&nbsp;₽</span>
                                </li>
                                <li>
                                <span class="profit_calculation_type">
                                    Доход в месяц:
                                </span>
                                    <span class="profit_calculation_value" id="month_profit">700</span><span class="rouble">&nbsp;₽</span>
                                </li>
                                <li>
                                <span class="profit_calculation_type">
                                    Доход в год:
                                </span>
                                    <span class="profit_calculation_value" id="year_profit">8400</span><span class="rouble">&nbsp;₽</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="calc-info">Калькуляция рассчитана при минимальном росте биткоина с учётом вывода средств раз в месяц.</p>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="slider">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive" src="images/slide1.jpg" alt="slide1">
                                <div class="carousel-caption">
                                    <h2 class="item_header">
                                        Успевайте приобрести курицу несущую <br><span>ЗОЛОТЫЕ ЯЙЦА</span>
                                    </h2>
                                    <p class="item_description">
                                        Продажа топового оборудования для майнинга криптовалют
                                    </p>
                                </div>

                            </div>
                            <div class="item">
                                <img class="img-responsive" src="images/slide2.jpg" alt="slide2">
                                <div class="carousel-caption">
                                    <h2 class="item_header">
                                        Продажа <span>топового оборудования</span> для майнинга биткоина
                                    </h2>
                                    <p class="item_description item_description-slide2">
                                        Всегда топовое оборудование по оптимальным ценам от производителя
                                    </p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="images/slide3.jpg" alt="slide3">
                                <div class="carousel-caption">
                                    <h2 class="item_header">
                                        ASIC AntMiner <span>S9</span>
                                    </h2>
                                    <h3 class="item_header_description">
                                        Лучшее оборудование для майнинга биткоина
                                    </h3>
                                    <p class="price-as">350 000,00 ₽</p>
                                    <p class="item_description item_description-slide3">
                                        В стоимость входит подключение и обслуживание на нашей ферме
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="section-title">Как это работает</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="howItWork">
                    <div class="ball">
                        1
                    </div>
                    <h3>
                        Вы покупаете качественное оборудование
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="howItWork">
                    <div class="ball">
                        2
                    </div>
                    <h3>
                        Мы подключаем его к нашей ферме
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="howItWork">
                    <div class="ball">
                        3
                    </div>
                    <h3>
                        Вы получаете ежедневный доход на свой кошелек
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>