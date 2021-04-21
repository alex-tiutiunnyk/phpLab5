@extends('test.index')
    <!DOCTYPE html>
<html lang="en">
<head>
    @section('title') <title>Pitcher coffee</title>@endsection
    <meta charset="utf-8"/>
    <link rel="icon" href="icons/coffee-bean_icon-icons.com_61176.ico"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@section('content')
    <section class="menu-1">
        <h1>Наше смачне меню</h1>
        <div class="grey-menu">
            <h2>Кава</h2>
            <div id="sec1">
                <div class="item">
                    <h3>Класична</h3>
                    <ul>
                        <li><span>Еспресо</span><span>22</span></li>
                        <li><span>Американо</span><span>22</span></li>
                        <li><span>Капучино</span><span>22</span></li>
                        <li><span>Лате</span><span>22</span></li>
                        <li><span>Раф</span><span>22</span></li>
                        <li><span>Мокачино</span><span>22</span></li>
                        <li><span>Джміль</span><span>22</span></li>
                    </ul>
                </div>
                <div class="item">
                    <h3>Авторська</h3>
                    <ul>
                        <li><span>Сирна</span><span>22</span></li>
                        <li><span>Раф нутелла</span><span>22</span></li>
                        <li><span>Раф пряний</span><span>22</span></li>
                    </ul>
                </div>
                <div class="item">
                    <h3>Альтернативна</h3>
                    <ul>
                        <li><span>Фільтр</span><span>22</span></li>
                        <li><span>Aeropress</span><span>22</span></li>
                        <li><span>V60</span><span>22</span></li>
                        <li><span>Clever</span><span>22</span></li>
                    </ul>
                </div>
            </div>
            <div class="container-quote">
                <div class="quote">
                    <h4>Цей світ не такий вже й поганий, доки в ньому є кава.</h4>
                    <h5>Кассандра Клер</h5>
                </div>
            </div>
            <h2>Їжа</h2>
            <div id="sec2">
                <div class="item">
                    <h3>Круасани солоні</h3>
                    <ul>
                        <li><span>з моцарелою</span><span>22</span></li>
                        <li><span>з томатами</span><span>22</span></li>
                        <li><span>з сиром</span><span>22</span></li>
                        <li><span>з шинкою</span><span>22</span></li>
                        <li><span>з куркою</span><span>22</span></li>
                        <li><span>з авокадо</span><span>22</span></li>
                        <li><span>з лососем</span><span>22</span></li>
                    </ul>
                </div>
                <div class="item">
                    <h3>Круасани солодкі</h3>
                    <ul>
                        <li><span>класичний</span><span>22</span></li>
                        <li><span>з нутеллою</span><span>22</span></li>
                        <li><span>з горіхами</span><span>22</span></li>
                        <li><span>з медом</span><span>22</span></li>
                        <li><span>з додатками</span><span>22</span></li>
                    </ul>
                    <span>мед, згущене молоко, джем полуниця, солона карамель, банан</span>
                </div>


                <div class="item" id="sec2-block">
                    <div>
                        <h3>Боули з кус-кусом</h3>
                        <ul>
                            <li><span>з авокадо</span><span>22</span></li>
                            <li><span>м'ясний</span><span>22</span></li>
                            <li><span>з тунцем</span><span>22</span></li>
                            <li><span>з куркою</span><span>22</span></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Сирники</h3>
                        <ul>
                            <li><span>Набір 4 шт.</span><span>74</span></li>
                            <li><span>Набір 6 шт.</span><span>89</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="quote">
                <h4>Скажи мені що ти їси, і я скажу тобі хто ти.</h4>
                <h5>Жан Антельм Брилья-Саварен</h5>
            </div>
        </div>
    </section>
@endsection

</body>
</html>
