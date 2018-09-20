<?php session_start(); ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="shortcut icon" href="images/favicon.png"/>
  <title>Эпимедиумная паста Sidra, купить в Казахстане</title>
  <meta name="description" content="Эпимедиумная паста Sidra - чрезвычайно сильный афродизиак, повышающий либидо, и полностью состоящий из отборных трав и натуральных ингредиентов с высочайшей биологической ценностью для организма.">

  <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/css/simple-line-icons.css" type="text/css" media="all" />
  <link rel="stylesheet" href="/css/settings.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/owl.carousel.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/owl.theme.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/owl.transitions.css" type="text/css" media="all"/>
  <link href="https://fonts.googleapis.com/css?family=Philosopher|Roboto:400,500&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/custom.css" type="text/css" media="all"/>
  <link rel="stylesheet" href="/css/my.css" type="text/css" media="all"/>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <div class="noo-spinner">
    <div class="spinner">
      <div class="cube1"></div>
      <div class="cube2"></div>
    </div>
  </div>

  <div class="site">

    <main id="main">

      <header class="bg-header">
        <div class="section">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <div class="branding__logo">
                  <a href="/">
                    <img src="/images/sidra/logo.png" alt="Sidra" class="main-logo">
                  </a>
                  <h3 class="heading small fz-24 dark"> 100% Натуральный продукт</h3>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="phones">
                  <a href="tel:+77078875631" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (707) 887 56 31</a>
                  <a href="whatsapp://send?phone=+77078875631" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (707) 887 56 31</a>
                </div>
              </div>
            </div>
            <div class="row header-main-content">
              <div class="col-sm-6">
                <h3 class="heading primary-color text-uppercase header-title"> Эпимедиумная<br> Паста</h3>
                <p class="primary-color fz-18 lh-22">Уникальный рецепт полового здоровья для мужчин и женщин</p>
                <h3 class="heading primary-color header-price fz-60 "> <!-- <s class="fz-50 red">7100〒</s> --> 5900〒</h3>
              </div>
              <div class="col-sm-6">
                <img src="/images/sidra/paste-bank.png" class="paste-bank">
                <img src="/images/sidra/made-in-turkey.png" class="made-in-turkey">
              </div>
            </div>
          </div>
        </div>
      </header>

      <?php if (isset($_SESSION['notifications'])) : ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <?php foreach ($_SESSION['notifications'] as $key => $notifications) : ?>
            <ul>
              <?php foreach ($notifications as $notification) : ?>
                <li><?= $key . ' - ' . $notification ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php unset($_SESSION['notifications']); ?>

      <!-- CONTACT BUTTONS -->
      <div class="fixed-button">
        <a href="whatsapp://send?phone=+77078875631" target="_top" data-attr="whatsapp_call">
          <img src="images/whatsapp-logo.png">
        </a>
      </div>
      <div class="fixed-button2">
        <a href="tel:+77078875631" target="_top" data-attr="phone">
          <img src="images/phone-receiver.png">
        </a>
      </div>

      <!-- ABOUT -->
      <section class="section section-about">
        <div class="container">
          <div class="row">
            <div class="offset-sm-1 col-sm-5">
              <img src="/images/sidra/spoon-epimedyum.jpg"  class="img-responsive rounded" alt="" />
            </div>
            <div class="col-sm-5">
              <h4 class="fw-normal mt-5 lh-30 fz-22">Компания «SapaLife» Официальный дилер SIDRA GIDA SANAYI TIC. LTD c торговой маркой «Sidra»  предлагает уникальный рецепт полового здоровья для мужчин и женщин, сохранившийся со времен рассвета Османской Империи.</h4>
              <div class="mt-4"></div>
              <p class="dark">Чрезвычайно сильный афродизиак, повышающий либидо, и полностью состоящий из отборных трав и натуральных ингредиентов с высочайшей биологической ценностью для организма.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FOR MAN -->
      <section class="section section-bg-man">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 p-0">
              <div class="section-custom-padding pl-5 pr-1">
                <h3 class="text-uppercase white">Полезные свойства эпимедиумной пасты <span class="primary-color">для мужчин</span></h3>
                <div class="mb-3"></div>
                <!-- <p class="white fz-22">Полезные свойства эпимедиумной пасты для мужчин.</p> -->
                <div class="row">
                  <div class="col-md-6">
                    <ul class="moody-list moody-list--icon">
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Усиливает эррекцию</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Продлевает половой акт</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Обостряет чувствительность</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Усиливает сексуальное желание и наслаждение</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Избавляет от преждевременной эякуляции</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="moody-list moody-list--icon">
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Увеличивает количество сперматозоидов, увеличивает их подвижность и плостность спермы</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Оздоравливает состояние мочеполовой системы, особенно почек и простаты (предстательной железы)</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 white">Улучшает работу репродуктивной системы в целом</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOR WOMAN -->
      <section class="section section-bg-woman">
        <div class="container">
          <div class="row">
            <div class="col-sm-5 p-0"></div>
            <div class="col-sm-7 p-0">
              <div class="section-custom-padding pl-5 pr-1">
                <h3 class="text-uppercase">Полезные свойства эпимедиумной пасты <span class="primary-color">для женщин</span></h3>
                <div class="mb-3"></div>
                <div class="row">
                  <div class="col-md-6">
                    <ul class="moody-list moody-list--icon">
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Усиливает сексуальное желание и наслаждение</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Решает проблему сухости влагалища, увеличивая секрецию желез</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Высвобождает женский гормон эстроген</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Решает проблему нарушения менструального цикла, существенно облегчает климакс</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Применяется в лечении бесплодия</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="moody-list moody-list--icon">

                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Борется с воспалительными процессами в малом тазу</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Эффективен при лечении нарушения функции яичников</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Применяется при лечении мастопатии, гипофункции половых желез, воспалительных заболеваний половых органов</p>
                          </div>
                        </div>
                      </li>
                      <li class="moody-list__item mb-1">
                        <div class="moody-list__header">
                          <div class="moody-list__marker primary-color">
                            <i class="fa fa-check"></i>
                          </div>
                          <div class="moody-list__heading">
                            <p class="moody-list__title fz-18 dark">Оздоравливает работу репродуктивной системы в целом</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- PASTE COMPOSITION -->
      <section class="section section-custom-padding ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="text-center">
                <h3 class="heading fw-normal fz-40">Эпимедиумная паста</h3>
                <div class="mb-8"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <img src="/images/sidra/epimedium-ot-besplodiya-i-seksualnyh-disfunktsii.jpg" class="rounded"><br><br>
            </div>
            <div class="col-sm-6">
              <h3 class="fw-normal fz-30 mb-3">Общие полезные свойства:</h3>
              <ul class="moody-list moody-list--icon">
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Повышает выносливость организма, заряжает энергией</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Стимулирует умственную активность, улучшает память и внимание</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Эффективен при неврастинии и неврозах</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Снимает усталость и стресс</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Оказывает благотворное влияние на нервную систему в целом</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div><br>
          <div class="row">
            <div class="col-sm-6 order-xs-2">
              <ul class="moody-list moody-list--icon">
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Нормализует кровяное давление и стимулирует кровоток в организме</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Укрепляет иммунитет</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Омолаживает организм</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Препятствует образованию морщин (старению кожи)</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Косвенно влияет на потерю избыточного в веса</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Борется с гипоксией</p>
                    </div>
                  </div>
                </li>
                <li class="moody-list__item mb-1">
                  <div class="moody-list__header">
                    <div class="moody-list__marker primary-color">
                      <i class="fa fa-check"></i>
                    </div>
                    <div class="moody-list__heading">
                      <p class="moody-list__title fz-18 dark">Обладает антивирусными и даже противоопухолевыми свойствами</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 order-xs-1">
              <img src="/images/sidra/paste-with-bg.jpeg" class="rounded"><br><br>
            </div>
          </div>
        </div>
      </section>

      <!-- COMPOSITION -->
      <section class="section bg-green section-custom-padding">
        <div class="container">
          <h2 class="heading fz-40 white mb-4 text-center">Состав эпимедиумной пасты:</h2>
          <div class="row white">
            <div class="offset-sm-4- col-sm-6">
              <p>Эпимедиумная Паста состоит из отборных, полезнейших натуральных ингредиентов, известных своими лечебными свойствами и имеющих высочайшую биологическую ценность для человека.</p>
              <p>Основным продуктом в ее составе является Экстракт травы Эпимедиума (Горянки), которая, одинаково эффективно влияет на повышение мужского и женского либидо, не смотря на разный гормональный фон у мужчин и женщин. Он действует наподобие половых гормонов и способен стимулировать собственные половые железы (гонадотропное действие), повышая сексуальную активность и влечение к противоположному полу.</p><br>
            </div>
            <div class="offset-sm-4- col-sm-6">
              <!-- <h4 class="white mt-2 mb-2">Эпимедиумная паста содержит в составе:</h4> -->
              <div class="row fz-15 lh-22">
                <div class="col-sm-4">
                  <ul class="list  list--circle">
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Экстракт Эпимедиума (Epimedium, Горянка корейская);</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Лиофилизированное Маточное молочко;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Пчелиная пыльца;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Цветочный мед;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Экстракт Трибулуса (Tribulus, Колючая лоза);</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Мака Перуанская (Lepidium);</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="list  list--circle">
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Экстракт листьев Гинкго Билоба (Ginkgo Biloba);</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Порошок плодов Рожкового дерева (Цератоний стручковый);</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Американский Женьшень;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Сибирский Женьшень;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Красный Женьшень;</div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <ul class="list  list--circle">
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Имбирь;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Корень Калгана;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Корица;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Листья Колы;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Листья Крапивы;</div>
                      </div>
                    </li>
                    <li class="list__item">
                      <div class="list__header">
                        <div class="list__marker yellow"></div>
                        <div class="list__heading">Тыква и т.д.</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- INSTRUCTION -->
      <section class="section box-section-shadow section-custom-padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-6 dark">
              <h3 class="heading fz-30 mb-3">Инструкция по применению:</h3>
              
              <ul class="list list--circle">
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Перед каждым употреблением обязательно перемешивать содержимое в банке. Рекомендуется использовать деревянную или пластиковую ложку. Желательно употреблять через час после еды</div>
                  </div>
                </li>
              
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Для общего укрепления организма принимать один раз в день пол чайной ложки.</div>
                  </div>
                </li>
              
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Для тех, кто проводит курс лечения принимать ежедневно по пол чайной ложки один раз в день.</div>
                  </div>
                </li>
              
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Для повышения сексуального либидо принимать за 30-40 минут до полового акта</div>
                  </div>
                </li>
              
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Для занятия спортом принимать за 30-40 минут перед тренировкой.</div>
                  </div>
                </li>
              
                <li class="list__item">
                  <div class="list__header">
                    <div class="list__marker primary-color"></div>
                    <div class="list__heading">Максимальная разовая доза одна чайная ложка. Для повторного курса необходимо сделать перерыв 7-10 дней. Максимальная суточная доза одна чайная ложка.</div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-6 dark">
              <h3 class="heading fz-30 mb-3">Побочные эффекты</h3>
              <p>Возможна головная боль при первых приёмах у тех, кто страдает вегето-сосудистой дистонией. На четвертый, или пятый день приёма пасты головная боль проходит, так как паста улучшает кровообращение, что способствует нормальной работе сосудов головного мозга.</p>
              <h3 class="heading fz-30 mt-3 mb-3">Противопоказания</h3>
              <p>Индивидуальная непереносимость ингредиентов. Не совместима с алкоголем.</p>
              <p>Не рекомендуется использовать продукт лицам, не достигшим 18 лет, беременным, кормящим, а также у кого сахарный диабет и болезни сердца, необходимо проконсультироваться с врачом.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SERTIFICATES -->
      <section class="section box-section-shadow section-custom-padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="text-center">
                <h3 class="heading fz-40">Сертификаты</h3>
                <div class="mb-8"></div>
              </div>
            </div>
            <div class="offset-sm-1 col-sm-4">
              <a href="/images/sidra/sertificate-sidra1.jpg"><img src="/images/sidra/sertificate-sidra1.jpg" class="img-responsive center-block"></a><br><br>
            </div>
            <div class="offset-sm-2 col-sm-4">
              <a href="/images/sidra/sertificate-sidra2.jpg"><img src="/images/sidra/sertificate-sidra2.jpg" class="img-responsive center-block"></a>
            </div>
          </div>
        </div>
      </section>

      <!-- PRICE -->
      <section class="section box-section-shadow section-custom-padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4 offset-sm-1">
              <img src="/images/sidra/box-epimedyum-2.jpg">
            </div>
            <div class="col-sm-12 col-md-4">
              <h2 class="price-of-paste">Цена</h2>
              <p class="dark">Благодаря тому что Мы являемся официальным дилером Компании SIDRA GIDA SANAYI TIC. LTD, Мы предлагаем лучшую цену.</p>
              <h4>Эпимедиумная паста «Sidra»</h4>
              <!-- <ul class="pricing-list">
                <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Консультация</span></li>
                <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Доставка во все регионы</span></li>
                <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Лучшая Цена</span></li>
                <li><i class="fa fa-check  primary-color"></i> <span class="m-1">Оригинальный продукт</span></li>
              </ul> -->
              <h2>5900〒</h2>
            </div>
          </div>
        </div>
      </section>

      <!-- DELIVERY & WHOLESALERS -->
      <section class="section box-section-shadow section-custom-padding">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <h3 class="heading fw-normal mt-3 mb-3 text-center">Доставка</h3>
              <p>Доставка по Казахстану — от 1400 тенге (в зависимости от количества). Доставим до двери.</p>
              <p>Доставка по городу Алматы — от 500 тенге(в зависимости от количества). Доставим до двери.</p>
            </div>
            <div class="col-sm-12 col-lg-6">
              <h3 class="heading fw-normal mt-3 mb-3 text-center">Оптовикам</h3>
              <p>Торговая компания SapaLife специализируется на продаже высококачественных, натуральных продуктов потребления из Казахстана, Турции и Узбекистана.</p>
              <p>Основным направлением компании является розничные и оптовые продажи препаратов для здоровья, спортивных питании, натуральной пищи, ароматов.</p>
              <p>Приглашаем сотрудничать с нами по регионам. Предлагаем выгодные условия. Обращайтесь к нам и мы ответим на все интересующие вас вопросы.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- FAQ -->
      <section class="section pt-10 pb-6">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h3 class="heading fw-normal fz-40 mb-8"> Часто задаваемые вопросы</h3>
              <div id="accordion" class="accordion">
                <div class="accordion-section">
                  <div class="accordion-header active" id="headingOne">
                    <h6 class="accordion-title">
                      <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Оригинал?</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="accordion-content">Да. Мы являемся официальным дилером, берем на заводе.</div>
                  </div>
                </div>
                <div class="accordion-section">
                  <div class="accordion-header" id="headingTwo">
                    <h6 class="accordion-title">
                      <div class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Как вы можете это подтвердить?</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="accordion-content">Если придете в наш офис можем показать наш дилерский контракт. Или можете обратиться сам завод по контактам указанный на упаковке они и подтвердят что мы являемся единственным дилером в Казахстане.</div>
                  </div>
                </div>
                <div class="accordion-section">
                  <div class="accordion-header" id="headingThree">
                    <h6 class="accordion-title">
                      <div class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Это натуральный продукт?</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="accordion-content">Да, состоит он из более 16-и различных трав и меда.</div>
                  </div>
                </div>
                <div class="accordion-section">
                  <div class="accordion-header" id="headingFour">
                    <h6 class="accordion-title">
                      <div class="collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Как его нужно употреблять?</div>
                      <span class="accordion-icon"></span>
                    </h6>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="accordion-content">Употреблять 2 раза в день, утром и вечером по пол чайной ложки. После вскрытия банки нужно размещать содержание.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="pt-7 pr-5 pl-5 pb-9 bg-white box-contact-shadow">
                <div class="text-center">
                  <i class="fa fa-envelope-o primary-color fz-30"></i>
                  <div class="mb-1"></div>
                  <h3 class="heading fw-normal fz-32"> Форма для заявки</h3>
                  <div class="mb-5"></div>
                  <div class="contact-form-wrapper">
                    <form method="post" action="sendmail.php">
                      <div class="row">
                        <div class="col-md-12"> 
                          <input type="text" name="name" placeholder="Введите имя*" minlength="2" maxlength="40" value="" required>
                        </div>
                        <div class="col-md-12">
                          <input type="tel" name="phone" placeholder="Введите номер телефона*" minlength="5" maxlength="20" value="" required>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button style-flat button-primary fullwidth mt-3">Отправить</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- MODAL MESSAGE -->
    <div class="modal fade" id="message-status" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Статус заявки</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <p class="alert <?=$_SESSION['status']?>"><?=$_SESSION['message']?></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-lg-7 col-md-6">
              <div class="branding__logo">
                <a href="./">
                  <img src="/images/sidra/logo.png" alt="Moody" class="main-logo" />
                </a>
              </div>
              <div class="mb-4"></div>
              <p>Адрес: Республика Казахстан, город Алматы, улица Толе би 286/2, офис 401.</p>
              <div class="mb-2"></div>
            </div>
            <div class="col-sm-4 col-lg-7 col-md-6">
                <div class="phones">
                  <a href="tel:+77078875631" target="_top" data-attr="phone"><i class="fa fa-phone"></i> 8 (707) 887 56 31</a>
                  <a href="whatsapp://send?phone=+77078875631" target="_top" data-attr="whatsapp_call"><i class="fa fa-whatsapp"></i> 8 (707) 887 56 31</a>
                </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MAP -->
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3c3941a1769ad60c01f4b732383a88e01c5a64e201e12ca21577b4b72c76f437&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=false"></script>
      <div class="copyright-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="mb-0"> Сайт зарезервирован компанией SapaLife</p>
            </div>
            <div class="col-sm-6">
              <div class="text-right text-center-sm">
                <ul class="social-networks">
                  <li class="item">
                    <a href="https://www.instagram.com/libido_organic/" class="link"><i class="fa fa-instagram link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-facebook link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-google-plus link-icon"></i></a>
                  </li>
                  <li class="item">
                    <a href="#" class="link"><i class="fa fa-linkedin link-icon"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <!-- <a id="backtotop" class="scrollup scrollup--fixed"><i class="fa fa-angle-up"></i></a> -->

  <!-- LOAD JQUERY LIBRARY -->
  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/modernizr-2.7.1.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/headroom.min.js"></script>
  <script src="/js/jQuery.headroom.js"></script>
  <script src="/js/waypoints.min.js"></script>
  <script src="/js/script.js"></script>

  <?php if (isset($_SESSION['status'])) : ?>
    <script> $('#message-status').modal('show'); </script>
    <?php unset($_SESSION['status']); unset($_SESSION['message']); ?>
  <?php endif; ?>

  <!-- <script src="/js/jquery.themepunch.tools.min.js"></script>
  <script src="/js/jquery.themepunch.revolution.min.js"></script>
  <script src="/js/extensions/revolution.extension.video.min.js"></script>
  <script src="/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="/js/extensions/revolution.extension.parallax.min.js"></script> -->
</body>
</html>
