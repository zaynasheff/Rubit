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
                                <img class="img-responsive" src="{{asset('images/slide1.jpg')}}" alt="slide1">
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
                                <img class="img-responsive" src="{{asset('images/slide2.jpg')}}" alt="slide2">
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
                                <img class="img-responsive" src="{{asset('images/slide3.jpg')}}" alt="slide3">
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
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="video">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/YtCNpYqVq2c"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="adventages">
                    <h2>ПРЕИМУЩЕСТВА КРИПТОДОМА:</h2>
                    <ul>
                        <li>
                            ЕЖЕДНЕВНОЕ НАЧИСЛЕНИЕ СРЕДСТВ И БЫСТРАЯ ОКУПАЕМОСТЬ
                        </li>
                        <li>
                            ПОСТОЯННЫЙ ВЫСОКИЙ ДОХОД БЕЗ РИСКОВ
                        </li>
                        <li>
                            БЕСПЛАТНЫЕ УСТАНОВКА И НАСТРОЙКА МАЙНИНГ-МАШИН
                        </li>
                        <li>
                            СЛУЖБА ПОДДЕРЖКИ И ОБСЛУЖИВАНИЕ ОБОРУДОВАНИЯ 24/7
                        </li>
                        <li>
                            ВОЗМОЖНОСТЬ ВОЗВРАТА ВЛОЖЕННЫХ СРЕДСТВ
                        </li>
                        <li>
                            СТОПРОЦЕНТНАЯ ОТКРЫТОСТЬ РАБОТЫ
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="decsriptionText">
                    <h4>
                        Мы рады приветствовать Вас на сайте уникального предприятия -
                        первого в России криптодома «БЕТХОВЕН». Наша компания предлагает
                        наиболее безопасный и надёжный способ заработка на самой востребованной
                        криптовалюте биткоин с максимально высокой доходностью.
                    </h4>
                    <p>
                        Все мы не раз слышали о том, что добывать биткоины каждый житель Земли,
                        имеющий более-менее мощный компьютер и выход в Интернет, может самостоятельно.
                        На самом деле, это уже не так. Система, обеспечивающая майнинг, то есть
                        производство криптовалюты, совершает триллион вычислительных операций в секунду,
                        и даже относительно неплохой бытовой компьютер останется
                        на сегодня лишь песчинкой в океане цифровых транзакций, а его использование
                        не принесёт владельцу хоть сколько-нибудь заметной прибыли.
                    </p>
                    <p>
                        Купить даже один биткоин по нынешнему его курсу тоже позволит себе не каждый,
                        поэтому компания «БЕТХОВЕН» предлагает совершенно новый формат заработка на
                        криптовалютном рынке. Мы дарим своим клиентам возможность ежедневно преумножать
                        средства не за счёт «прокрутки» Ваших рублёвых или долларовых сбережений: мы
                        продаём вам самое современное оборудование для майнинга, а затем берём его у
                        Вас в аренду для использования в нашем дата-центре и платим отличные комиссионные!
                        Наш алгоритм можно сравнить с банковской комиссией: при проведении любой операции
                        с Вашими деньгами процент за это берёт Ваш банк, а в нашем случае процент с любой
                        операции с биткоинами по всему миру достаётся Вам. И происходит это ежеминутно,
                        и днём, и ночью. Каждый день. Биткоин надёжно защищён от падений курса, но даже
                        если это, чисто теоретически, произойдёт,
                        Вы не теряете своих сбережений - Ваш доход просто на время становится чуть более
                        умеренным, но зарабатывать Вы в любом случае продолжаете!
                    </p>
                    <p>
                        Счёт Вашего биткоин-кошелька пополняется постоянно, свои средства Вы можете в
                        любой момент вывести на банковскую карту или обналичить. Если по какой-то причине
                        Вы захотите отказаться от гарантированного дохода с нашей помощью,
                        мы с удовольствием выкупим Ваше оборудование по хорошей цене и
                        продолжим работать на нём в интересах других клиентов.
                    </p>
                    <p>
                        <b>Криптодом «БЕТХОВЕН» открыт для Вас уже сегодня!</b><br>
                        Пока - только в самом сердце России, городе Екатеринбурге, объединяющем Европу
                        и Запад. Мы ждём всех, кто заинтересован в собственном благополучии и благополучии
                        своих близких в офисе по адресу: улица Малышева, дом 71а. Получить любую
                        дополнительную информацию о наших услугах и задать
                        вопросы менеджерам криптодома Вы всегда можете по телефону <b>бесплатной
                            горячей линии 8-800-500-32-44</b> или на сайте <b>bitclub24.ru.</b>
                    </p>
                    <p>
                        <b>
                            Обеспеченное будущее с криптодомом «БЕТХОВЕН» доступно каждому уже сегодня.
                            Вы ведь не хотите, чтобы Ваши деньги зарабатывал кто-то другой?
                        </b>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="favorably">
                    <h2>МАЙНИТЬ С НАМИ ВЫГОДНО ПОТОМУ ЧТО:</h2>
                    <div class="favorablyItem">
                        <img class="img-responsive" src="{{asset('images/bitcoin-grey.svg')}}" alt="bitcoin"/>
                        <h3>
                            Самые выгодные цены
                            на покупку оборудования
                            и доставка от производителя
                        </h3>
                    </div>
                    <div class="favorablyItem">
                        <img class="img-responsive" src="{{asset('images/bitcoin-grey.svg')}}" alt="bitcoin"/>
                        <h3>
                            Круглосуточная техническая
                            поддержка на сайте и по телефону
                        </h3>
                    </div>
                    <div class="favorablyItem">
                        <img class="img-responsive" src="{{asset('images/bitcoin-grey.svg')}}" alt="bitcoin"/>
                        <h3>
                            Предоставление помещения
                            для работы оборудования
                        </h3>
                    </div>
                    <div class="favorablyItem">
                        <img class="img-responsive" src="{{asset('images/bitcoin-grey.svg')}}" alt="bitcoin"/>
                        <h3>
                            Официальное оформление
                            договоров и персональный менеджер
                        </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h2>
                    Биткоин - улучшенная версия золота
                </h2>
                <p>
                    Биткоин по-прежнему вызывает у людей разные эмоции и зачастую становится
                    причиной ожесточенных споров. Уверенность в надёжности «криптовалюты
                    номер один» внушает тот факт, что активно в его поддержку выступают
                    наиболее авторитетные политики и финансисты планеты:
                </p>
            </div>

        </div>
        <div class="row">
            <div class="people">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="menItem">
                        <div class="quoteText">
                            "С ростом числа пользователей цена
                            биткоина растет. В этом есть большой
                            потенциал для положительной обратной связи:
                            чем больше пользователей, тем выше цена."
                        </div>
                        <div class="quoteAuthor">
                            <img class="img-responsive" src="{{asset('images/satochi.jpg')}}" alt="САТОШИ НАКАМОТО"/>
                            <h4>САТОШИ НАКАМОТО<br>
                                <span>создатель биткоина</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="menItem">
                        <div class="quoteText">
                            "Думаю, это грандиозный
                            технический прорыв. Биткоин превосходит
                            классические валюты, обеспечивая гибкость и
                            удобство транзакций, особенно крупных."
                        </div>
                        <div class="quoteAuthor">
                            <img class="img-responsive" src="{{asset('images/gates.jpg')}}" alt="БИЛЛ ГЕЙТС"/>
                            <h4>БИЛЛ ГЕЙТС<br>
                                <span>основатель компании Microsoft</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="menItem">
                        <div class="quoteText">
                            "Даже если биткоин будет средством совершения
                            части незаконных операций, сфера его применения
                            гораздо шире. Значение биткоина сложно переоценить."
                        </div>
                        <div class="quoteAuthor">
                            <img class="img-responsive" src="{{asset('images/mask.jpg')}}" alt="ИЛОН МАСК"/>
                            <h4>ИЛОН МАСК<br>
                                <span>генеральный директор Tesla</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="menItem">
                        <div class="quoteText">
                            "Виртуальные валюты представляют
                            собой очень интересный международный эксперимент.
                            Если Россия ограничит их хождение, это будет колоссальный шаг назад."
                        </div>
                        <div class="quoteAuthor">
                            <img class="img-responsive" src="{{asset('images/gref.jpg')}}" alt="ГЕРМАН ГРЕФ"/>
                            <h4>ГЕРМАН ГРЕФ<br>
                                <span>президент Сбербанка</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <ul class="footerNav">
                    <li>
                        <a href="#">Оборудование</a>
                    </li>
                    <li>
                        <a href="#">O нас</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="socials">
                    <a href="#">
                        Instagram
                    </a>
                    <a href="#">
                        Youtube
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="footerAbout">
                        <h2>MINER HOTEL</h2>
                        <p>
                            Компания Бетховен, лидер в области. Все права защищены. 2018.
                            Майним, продаем долю в ресурсах по добыче (майнингу) популярных криптовалют.
                        </p>
                    </div>
            </div>
        </div>
    </div>
</div>



<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>