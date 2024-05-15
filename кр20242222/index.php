<?php
    session_start();
    include 'inc/header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
    <!--End Header-->
    <!--Start Main-->
    <main class="main"> 
        <!--Start Banner Section-->
        <section class="banner-section">
            <div class="conteiner">
                <div class="banner-text">
                    <h1 class="banner-title">О нас</h1>
                    <div class="banner-description"> 
                        <img src="images/2134.jpeg" class="img123">
                        <img src="images/4325.jpg" class="img1234">
                        <img src="images/ewqeqw.jpeg" class="img123">
                        <a class="menu-link" href="#"></a>
                        <a class="menu-link" href="#"></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section-->
        <!--Start Cards Section-->
        <section class="cards-section">
            <a name="metka">
            <div class="conteiner">
                    <a name="metka"></a>
                <div class="cards-text2">
                    <h1 class="card-title2">Номера</h1>
                    <div class = "card-title2" >
                        Выберите подходящий для вас номер:
                    </div>
                </div>
            
                <div class="cards">
                    <div class="cards-rows">
                      <div class="card">
                            <img class="card-img" src="images/123456.PNG">
                            <div class="card-body">
                                <h3 class="card-title">Бюджет</h3>
                                <div class="card-text">В номере: кровать односпальная (90*190 см), прикроватный столик, шкаф, письменный стол, стул, телевизор, холодильник, телефон. В ванной комнате душевая кабина, зеркало, полотенца, гигиенический набор.</div>
                                <form action="zayavka/zayavka.php" method="post">
                                       <button class="card-button button2" name="tip_komnata" value="1">Забронировать &#x2192</button>
                                </form>
                            </div>
                        </div>
                         <div class="card">
                               <img class="card-img" src="images/werewtv.PNG">
                               <div class="card-body">
                                   <h3 class="card-title">Комфорт</h3>
                                   <div class="card-text">Светлый номер с большой двуспальной кроватью, собственным санузлом,системой охлаждения воздуха. Возможен выбор номера с ванной или душевой кабиной. Халат, тапочки, бутилированная вода. Фен. Сейф.</div>
                                   
                                       <!-- <a class="card-link" href="zayavka.php" name="комфорт" value="2">Забронировать &#x2192</a> -->
                                       <form action="zayavka/zayavka.php" method="post">
                                       <button class="card-button button2" name="tip_komnata" value="2">Забронировать &#x2192</button>
                                        </form>
                                   
                               </div>
                           </div>
                         <div class="card">
                               <img class="card-img" src="images/sacxzv213.PNG">
                               <div class="card-body">
                                   <h3 class="card-title">Классичесский</h3>
                                   <div class="card-text">Классический стандартный номер: полутороспальная кровать, ванная комната, фен, халат, одноразовые тапочки, бутилированная вода, проводной интернет - для подключения ноутбука.<br> Отличный вид из окна.</div>
                                   <form action="zayavka/zayavka.php" method="post">
                                       <button class="card-button button2" name="tip_komnata" value="3">Забронировать &#x2192</button>
                                    </form>
                               </div>
                           </div>
                       </div>
                </div> 
            </div>   
        </section>
        <!--End Cards Section-->
    </main>
    <!--End Main-->
<?php
include "inc/footer.php"
?>
    <style>
    .card{
        box-shadow: 0px 2px 7px 0px #3cff3c;
    }
    .card:hover{
        box-shadow: 0px 10px 30px 0px #3cff3c;
    }
    </style>

</body>
</html>