<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="#">
                        <span>Rubit</span>
                        <img src="images/bitcoin.png" alt="logo" class="img-responsive">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                тут авторизация
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="navigatiion">
        <ul class="nav">
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="slider">
                    тут слайдер
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>