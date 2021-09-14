<?php

//include('admin/db-connect.php');
//$db = new queryBuilder($pdo);
//$contacts = $db->get_one('contacts', 4);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-4">
            <div class="header__menu">
              <div class="header__menu-link">
                <p id="header__menu"><span class="header__menu-btn"></span></p>
                <ul class="header__menu-body">
                  <li><img class="header__menu-close" src="img/header/close_btn.svg" alt="btn-close" style="position: absolute; right: 10px; top: 5px; width: 50px; cursor: pointer"></li>
                  <li><a href="#whu">Кому нужна помощь?</a></li>
                  <li><a href="#kid_wizard">Стань детским волшебником</a></li>
                  <li><a href="http://">Документы</a></li>
                  <li><a href="http://">История фонда</a></li>
                  <li><a href="http://">Отчеты</a></li>
                  <li><a href="http://">СМС-помощь</a></li>
                  <li><a href="#contacts">Контакты</a></li>
                </ul>
              </div>
              <!-- /.header__menu-link -->
            </div>
            <!-- /.header__menu -->
          </div>
          <!-- /.col-12 -->
          <div class="col-md-7 col-8">
            <div class="header__menu-social">
              <ul>
                <li><a href="http://"><img src="img/header/facebook.png" alt="link"></a></li>
                <li><a href="http://"><img src="img/header/twitter.png" alt="link"></a></li>
                <li><a href="http://"><img src="img/header/vk.png" alt="link"></a></li>
                <li><a href="http://"><img src="img/header/instagramm.png" alt="link"></a></li>
              </ul>
            </div>
            <!-- /.header__menu-social -->
          </div>
          <!-- /.col-8 -->
          <div class="col-md-3 col-12">
            <div class="header__menu-contacts">
              <p><a href="tel:<?php if(!empty($contacts)){ echo $contacts['phone']; };?>"><?php if(!empty($contacts)){ echo $contacts['phone']; }; ?></a></p>
              <p><a class="header__menu-contacts-mail" href="mailto:<?php if(!empty($contacts)){ echo $contacts['email']; }; ?>"><?php if(!empty($contacts)){ echo $contacts['email']; };?></a> </p>
            </div>
            <!-- /.header__menu-contacts -->
          </div>
          <!-- /.col-2 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
  </header>
  <!-- /.header -->
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-12">
            <div>
              Массив по частям
                <div><b>Имя <span id="nameJson"></span></b></div>
                <div><b>id <span id="idJson"></span></b></div>
             </div>

             ---
             Весь массив
             <b><div id="allJson">
               
             </div>
             </b>
          <div class="main__text">
            <div class="main__text-title">
              <img id="heart_1" src="img/main/Heart1.png" alt="heart1">
              <h1>Благотворительный фонд Марии Леонтьевой <img id="heart_2" src="img/main/Heart2.png" alt="heart2"></h1>
            </div>
            <!-- /.main__text-title -->
            <div class="main__text-subtitle">
              <p>Быть рядом!</p>
            </div>
            <!-- /.main__text-subtitle -->
            <button class="main__btn">Пожертвовать средства</button>
            <button class="main__btn main__btn-reverse">Стать волонтером</button>
          </div>
          <!-- /.main-text -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="offset-md-0 col-md-4 offset-3 col-6 d-none d-md-block">
          <div class="main__bg">
            <img src="img/main/rocket.png" alt="rocket">
            <img class="main__img-bg" src="img/main/Fond_ML.png" alt="фон">
            <img class="main__img-fly" src="img/main/lego.png" alt="lego">
            <img class="main__img-fly2" src="img/main/cubes.png" alt="cubes">
          </div>
          <!-- /.main__bg -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.main -->
  <?php
  //$kids = $db->get_all('kids');
  ?>
  <section class="help">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="help__header" id="whu">Кому нужна наша помощь</h2>
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->

          <?php
          $i = 1;
          foreach ($kids as $kid){
          if($kid['status'] == 'active'){
              $i++;
              if ( $i % 2 == 0){
              ?>
      <div class="row">
          <div class="col-md-8 col-12">
              <div class="help__item" id="<?php echo $kid['id']?>">
                  <img class="help_photo" src="<?php echo $kid['avatar']?>" alt="Маргарита" style="width: 300px; height: 300px; margin-bottom: 15px; object-fit: cover; object-position: center; border-radius: 50%;">
                  <!--<img class="help_bg" src="img/help/item_help.png" alt="bg">-->
                  <div class="help__info">
                      <p class="help__name"><?php echo $kid['name'] . ' ' . $kid['last_name']?></p>
                      <p class="help__money d-flex flex-column">
                          <span>Внесено пожертвований</span>
                          <span><?php echo $kid['sum1']?> рублей из</span>
                          <span><?php echo $kid['sum2']?> рублей </span>
                      </p>
                      <p><a class="help__link" data-user="<?php echo $kid['id']?>">История <?php echo $kid['name']?></a></p>
                  </div>
                  <!-- /.help__info -->
              </div>
              <!-- /.help__item -->
          </div>
              <!-- /.col-lg-6 -->
          <div class="col-md-4 col-12">
              <div class="help__btn d-flex flex-column">
                  <a class="main__btn" href="#">Сделать пожертвование</a>
                  <a class="main__btn main__btn-reverse" href="#">Помочь другим способом</a>
                  <a class="main__btn main__btn-reverse" href="#">Счет для Юридических лиц</a>
              </div>
              <!-- /.help__btn -->
          </div>
          <!-- /.col-lg-6 -->
      </div>
        <!-- /.row -->
          <?php } else { ?>
        <div class="row d-flex flex-md-row flex-column-reverse">
            <!-- /.col-lg-6 -->
            <div class="col-md-6 col-12">
                <div class="help__btn d-flex flex-column">
                    <a class="main__btn" href="#">Сделать пожертвование</a>
                    <a class="main__btn main__btn-reverse" href="#">Помочь другим способом</a>
                    <a class="main__btn main__btn-reverse" href="#">Счет для Юридических лиц</a>
                </div>
                <!-- /.help__btn -->
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-md-6">
                <div class="help__item" id="<?php echo $kid['id']?>">
                    <img class="help_photo" src="<?php echo $kid['avatar']?>" alt="Артур" style="width: 300px; height: 300px; margin-bottom: 15px; object-fit: cover; object-position: center; border-radius: 50%;">
                    <!--<img class="help_bg" src="img/help/item_help.png" alt="bg">-->
                    <div class="help__info">
                        <p class="help__name"><?php echo $kid['name'] . ' ' . $kid['last_name']?></p>
                        <p class="help__money d-flex flex-column">
                            <span>Внесено пожертвований</span>
                            <span><?php echo $kid['sum1']?> рублей из</span>
                            <span><?php echo $kid['sum1']?> рублей </span>
                        </p>
                        <p><a class="help__link" href="#" data-user="<?php echo $kid['id']?>">История <?php echo $kid['name']?></a></p>
                    </div>
                    <!-- /.help__info -->
                </div>
                <!-- /.help__item -->
            </div>
        </div>
        <!-- /.row -->
              <?php  } } } ?>
        </div>




    <!-- /.container -->
  </section>
  <!-- /.help -->

  <section class="help mt-5">
      <div class="container">
          <div class="row">
              <div class="col-12 text-center">
                  <h2 class="help__header mb-5" id="whu">Кому мы помогли</h2>
              </div>
              <!-- /.col-12 -->
          </div>
          <!-- /.row -->

          <?php
          $i = 1;
          foreach ($kids as $kid){
          if($kid['status'] == 'finished'){
              $i++;
          if ( $i % 2 == 0){
              ?>
              <div class="row">
                  <div class="col-md-8 col-12">
                      <div class="help__item" id="<?php echo $kid['id']?>">
                          <img class="help_photo" src="<?php echo $kid['avatar']?>" alt="Маргарита" style="width: 300px; height: 300px; margin-bottom: 15px; object-fit: cover; object-position: center; border-radius: 50%;">
                          <!--<img class="help_bg" src="img/help/item_help.png" alt="bg">-->
                          <div class="help__info">
                              <p class="help__name"><?php echo $kid['name'] . ' ' . $kid['last_name']?></p>
                              <p class="help__money d-flex flex-column">
                                  <span>Внесено пожертвований</span>
                                  <span><?php echo $kid['sum1']?> рублей из</span>
                                  <span><?php echo $kid['sum2']?> рублей </span>
                              </p>
                              <p><a class="help__link" href="#" data-user="<?php echo $kid['id']?>">История <?php echo $kid['name']?></a></p>
                          </div>
                          <!-- /.help__info -->
                      </div>
                      <!-- /.help__item -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-md-4 col-12">
                      <div class="help__btn d-flex flex-column">
                          <span class="main__btn">СБОР ЗАКРЫТ</span>
                          <a class="main__btn main__btn-reverse" href="#">Помочь другим способом</a>
                          <a class="main__btn main__btn-reverse" href="#">Счет для Юридических лиц</a>
                      </div>
                      <!-- /.help__btn -->
                  </div>
                  <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
          <?php } else { ?>
          <div class="row d-flex flex-md-row flex-column-reverse">
              <!-- /.col-lg-6 -->
              <div class="col-md-6 col-12">
                  <div class="help__btn d-flex flex-column">
                      <a class="main__btn" href="#">Сделать пожертвование</a>
                      <a class="main__btn main__btn-reverse" href="#">Помочь другим способом</a>
                      <a class="main__btn main__btn-reverse" href="#">Счет для Юридических лиц</a>
                  </div>
                  <!-- /.help__btn -->
              </div>
              <!-- /.col-lg-6 -->
              <div class="col-md-6">
                  <div class="help__item" id="<?php echo $kid['id']?>">
                      <img class="help_photo" src="admin/<?php echo $kid['avatar']?>" alt="Артур" style="width: 300px; height: 300px; margin-bottom: 15px; object-fit: cover; object-position: center; border-radius: 50%;">
                      <!--<img class="help_bg" src="img/help/item_help.png" alt="bg">-->
                      <div class="help__info">
                          <p class="help__name"><?php echo $kid['name'] . ' ' . $kid['last_name']?></p>
                          <p class="help__money d-flex flex-column">
                              <span>Внесено пожертвований</span>
                              <span><?php echo $kid['sum1']?> рублей из</span>
                              <span><?php echo $kid['sum1']?> рублей </span>
                          </p>
                          <p><a class="help__link" href="#" data-user="<?php echo $kid['id']?>">История <?php echo $kid['name']?></a></p>
                      </div>
                      <!-- /.help__info -->
                  </div>
                  <!-- /.help__item -->
              </div>
          </div>
          <!-- /.row -->
          <?php  } } } ?>
      </div>


      <!-- /.container -->
  </section>
  <!-- /.help -->

  <section class="modal-2">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="modal-2-window">
            <div class="modal-2-window__img text-center">
              <img src="img/help/maria/maria.jpg" alt="Фотография">
            </div>
            <!-- /.modal-window__img -->
            <div class="modal-2-window__text">
               <img class="modal__btn-close" src="img/header/close_btn.svg" alt="Закрыть окно">
            </div>
            <!-- /.modal-window__text -->
          </div>
          <!-- /.modal-window -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.contaner -->
  </section>
  <!-- /.modal -->

  <section class="important">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="important__bg">
            <img src="img/important/important.png" alt="картинка">
          </div>
          <!-- /.vazhno__bg -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-md-6">
          <div class="important__msg">
            <!--<img src="img/important/important_msg.png" alt="картинка">-->
            <div class="important__msg-text text-center">
              <p class="important__msg-title" >Делимся важним</p>
              <p>Фонд Марии Леонтьевой рассматривает разные варианты помощи больным детям. Мы всегда готовы предоставить любые правоустанавливающие документы фонда, счета и акты, чтобы сделать вашу помощь «юридически легкой» для вас.</p>
            </div>
            <!-- /.important__msg-text -->
          </div>
          <!-- /.important_msg -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.vazhno -->
  <section class="about">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-12">
          <div class="about__text">
            <div class="about__text-title">
              Благотворительный фонд
              с открытым сердцем
            </div>
            <!-- /.about__text-title -->
            <div class="about__text-text">
              Фонд Марии Леонтьевой зарегистрирован в министерстве юстиции под учетным номером 7714017510.
               Инициативная группа фонда – это волонтеры, которые в разное время пришли на помощь Марии Леонтьевой и ее родителям.
            </div>
            <!-- /.about__text-text -->
          </div>
          <!-- /.about1__text -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-md-5 col-12">
          <div class="about__link text-center">
            <!--<img src="img/about/Ellipse.png" alt="подложка">-->
            <div class="about__link-wrap">
              <a class="reg_number" href="http://unro.minjust.ru/NKOs.aspx">Ссылка на
                регистрационный
                номер <img src="img/about/Arrow.svg" alt="arrow"></a>
            </div>
            <!-- /.about__link-wrap -->
          </div>
          <!-- /.about__link -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.about1 -->
  <section class="openBook">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="openBook__img">
            <img src="img/openBook/openBook.png" alt="background">
          </div>
          <!-- /.openBook__img -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6 col-12">
          <div class="openBook__text">
            <div class="openBook__text-title">
              Открытая книга
            </div>
            <!-- /.openBook__text-title -->
            <div class="openBook__text-subtitle">
              Мы покажем каждый рубль, поступивший к нам
            </div>
            <!-- /.openBook__text-subtitle -->
            <div class="openBook__text-body">
              Целью нашей работы является не только сбор средств больным детям, но и открытость каждого вашего взноса. Мы не скрываем расходы фонда на рекламу и АХО, а также полученные фондом деньги от юридических лиц.
              <span>Давайте сделаем Благотворительность прозрачнее.</span>
            </div>
            <!-- /.openBook__text-body -->
          </div>
          <!-- /.openBook__text -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.openBook -->
  <sections class="donations">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <div class="donations__text">
            <div class="donations__text-title">
              Ежемесячная подписка
              на пожертвования
            </div>
            <!-- /.donations__text-title -->
            <div class="donations__text-subtitle">
              Действительно важно
            </div>
            <!-- /.donations__text-subtitle -->
            <div class="donations__text-body">
              Ежемесячные перечисления в указанную дату дают нам невероятно важную вещь – возможность планировать! Иногда такой план может спасти жизнь ребенку.
            </div>
            <!-- /.donations__text-body -->
          </div>
          <!-- /.donations-text -->
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6 col-12">
          <div class="donations__img">
            <img src="img/donations/donations.png" alt="картинка">
          </div>
          <!-- /.donations__img -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </sections>
  <!-- /.donations -->
  <section class="offer" id="kid_wizard">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="offer__header">
            Стань детским волшебником
          </div>
          <!-- /.offer__header -->
          <div class="offer__subtitle">
            Чтобы фонд работал эффективнее нам очень нужны волонтеры
          </div>
          <!-- /.offer__subtitle -->
        </div>
        <!-- /.col-12 -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-3">
          <div class="offert__heart">
            <img src="img/donations/heart__1.png" alt="heart">
            <img class="offer__heart-absolute" src="img/donations/heart__2.png" alt="heart">
          </div>
          <!-- /.offert__hert -->
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-6">
          <form class="offer__form" action="#">
            <input class="btn main__btn main__btn-reverse" type="text" placeholder="Ваше имя">
            <input class="btn main__btn main__btn-reverse" type="text" placeholder="Ваш телефон">
            <button class="btn main__btn">Стань частью нашей Команды</button>
          </form>
        </div>
        <!-- /.offset-lg-3 col-lg-6 -->
        <div class="col-lg-3">
          <div class="offer__img">
            <img src="img/donations/magic.png" alt="magic">
          </div>
          <!-- /.offer__img -->
        </div>
        <!-- /.col-lg-3 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.offer -->
<section class="donations2">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="donations2__form">
          <form action="#">
            <div class="donations2__form-header">
              Сделать пожертвование
            </div>
            <!-- /.donations2__form-header -->
            <input class="btn main__btn main__btn-reverse" type="text" placeholder="Введите сумму">
            <button class="btn main__btn" >Пожертвовать</button>
          </form>
        </div>
        <!-- /.donations2__form -->
      </div>
      <!-- /.col-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /.donations2 -->
<?php

    //$requisites = $db->get_one('requisites', 9);

?>
<footer class="footer" id="contacts">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-12">
        <p class="footer__title">ФОНД
          МАРИИ
          ЛЕОНТЬЕВОЙ
        </p>
        <ul class="footer__social">
          <li><a href="http://"><img src="img/footer/facebook.png" alt="link"></a></li>
          <li><a href="http://"><img src="img/footer/twitter.png" alt="link"></a></li>
          <li><a href="http://"><img src="img/footer/vk.png" alt="link"></a></li>
          <li><a href="http://"><img src="img/footer/instagramm.png" alt="link"></a></li>
        </ul>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-3 col-12">
        <p class="footer__title">юридический адрес</p>
        <p><?php echo $contacts['adress']?></p>
        <p>Телефон:
          <span><?php echo $contacts['phone']?></span>
        </p>
        <p>
          E-mail:
          <span><?php echo $contacts['email']?></span>
        </p>
        <p>СМС Помощь</p>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-3 col-12">
        <p class="footer__title">Реквизиты:</p>
        <p><?php echo $contacts['adress']?>
          ИНН <?php echo $requisites['inn']?></p>
      </div>
      <!-- /.col-lg-3 -->
      <div class="col-lg-3 col-12">
        <p class="footer__title">банк:</p>
        <p>
          <span class="w-100">ИНН <?php echo $requisites['inn']?></span>
          <span class="w-100">Р/С <?php echo $requisites['rs']?></span>
          <span class="w-100">К/С <?php echo $requisites['ks']?></span>
          <span class="w-100">КПП <?php echo $requisites['kpp']?></span>
          <span class="w-100">БИК <?php echo $requisites['bik']?></span>
          <span class="w-100">ОГРН <?php echo $requisites['ogrn']?></span>
          <span class="w-100"><?php echo $requisites['recipient']?></span>
          <span class="w-100"><?php echo $requisites['bank']?></span>
        </p>
      </div>
      <!-- /.col-lg-3 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</footer>
<!-- /.footer -->
<script>
  let userItem = document.querySelectorAll('.help__link')
  if (userItem.length>0){
      for (let i = 0; i < userItem.length; i++) {
          let element = userItem[i]
          //console.log(element)
          element.addEventListener('click',function (e) {
              const target = e.target.getAttribute('data-user')
              console.dir(target)
          })
          // ещё какие-то выражения
      }

  }
</script>

<script src="js/dbRequire.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    $('#header__menu').on("click", function(){
      $('.header__menu-body').show(100);
      $('body').toggleClass('.fixed');
    });
    $('.header__menu-close').on("click", function(){
      $('.header__menu-body').hide(100);
    });
    $('.help__link').on("click", function(){
      $('.modal').show(100);
    });
    $('.modal__btn-close').on("click", function(){
      $('.modal').hide(100);
    });
    $('.main__btn').on("click", function(){
      $('.modal-2').show(100);
    });
    $('.main__btn').on("click", function(){
      $('.modal').hide(100);
    });
    $('.modal__btn-close').on("click", function(){
      $('.modal-2').hide(100);
    });
    $.getJSON('../admin/db.json',
      function(data) {
      const jsonFile = data
      const name = document.getElementById("nameJson");
      const id = document.getElementById("idJson");

      // тут выводим загруженный json в определенные поля
      name.innerHTML = `${jsonFile[0].name} ${jsonFile[0].last_name} на сумму ${jsonFile[0].sum2}`
      id.innerHTML = jsonFile[0].id
      console.log('json file', jsonFile);

      // Если надо выводим весь массив
      document.getElementById("allJson").append(JSON.stringify(jsonFile))
    });
  });
</script>
</body>
</html>
