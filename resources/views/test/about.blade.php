@extends('test.index')


    <!DOCTYPE html>
<html lang="en">
<head>
    @section('title') <title>Pitcher coffee</title>@endsection
    <meta charset="utf-8"/>
    <link rel="icon" href="icons/coffee-bean_icon-icons.com_61176.ico"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
@section('content')
    <section class="land-1">
        <h3 id="date">01.03.2021</h3>
        <h2>Відкриття нової кав'ярні!</h2>
        <h3>Цього разу серце відвело нас на Політех</h3>
        <h3>вул. Борщагівська, 150</h3>
    </section>

    <section class="land-2">
        <div style="flex:2.5;">
            <img style="width:100%;min-width:260px;" id="img-heart"
                 src="pictures/Screenshot%202021-02-15%20155045%201.png">
        </div>
        <div style="flex:5; margin:0 5rem;">
            <h2>Приходь грітися!</h2>
            <h3 id="text">У нас великий вибір кави, чаю, смачних сніданків та десертів. Чудове місце для приємної
                зустрічі.</h3>
            <h3>З любов'ю, </h3>
            <h3>Пітчер Family</h3>
        </div>
        <div style="flex:1">
            <img id="img-pitcher" src="pictures/Screenshot%202021-02-15%20155132%201.png">
        </div>
    </section>

    <section class="land-3">
        <img id="arrow" src="pictures/Section%203.png">
    </section>

    <section class="land-4">
        <div class="gallery">
            <div class="item">
                <img src="pictures/Screenshot%202021-02-15%20174910%202.png">
                <h2>Ми pet-friendly</h2>
            </div>
            <div class="item">
                <img src="pictures/Screenshot%202021-02-15%20174450%202.png">
                <h2>Багато кави</h2></div>
            <div class="item">
                <img src="pictures/Screenshot%202021-02-15%20174700%203.png">
                <h2>Смачні десерти</h2>
            </div>
        </div>
        <div class="center-button">
            <button><span>Зробити замовлення</span><img id="buy-button" src="icons/Vector.png">
            </button>
        </div>

    </section>
@endsection
</body>
</html>
