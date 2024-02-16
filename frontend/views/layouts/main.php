<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

// Registreer de AppAsset, indien nodig
AppAsset::register($this);

// Register de noodzakelijke meta-tags en CSRF
$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);

// Koppel het CSS-bestand
$this->registerCssFile('@web/css/style.css');
$this->registerCssFile('@web/css/site.css');

// Favicon
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
  <title>
    <?= Html::encode($this->title) ?>
  </title>
  <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
  <?php $this->beginBody() ?>

  <header id="header">
    <?php
 NavBar::begin([
  'brandLabel' => 'LOGO',
  'brandUrl' => Yii::$app->homeUrl,
  'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
]);

// Menu-items array
$menuItems = [
  ['label' => 'Home', 'url' => ['/site/index']],
  ['label' => 'Catalog', 'url' => ['/site/about']],
  ['label' => 'Product', 'url' => ['/site/product']],
  ['label' => 'Gegevens', 'url' => ['/site/gegevens']],
  ['label' => 'Cart', 'url' => ['/site/cart']],
  ['label' => 'Betaal', 'url' => ['/site/betaal']],
  ['label' => 'Bevestigen', 'url' => ['/site/bevestigen']],
  ['label' => 'Inlog', 'url' => ['/site/inlog']],
];

// Controleren of de gebruiker is ingelogd en menu-items toevoegen op basis van de gebruikersstatus
if (Yii::$app->user->isGuest) {
  // Voor gasten
  $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
  $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
} else {
  // Voor ingelogde gebruikers
  $menuItems[] = '<li class="nav-item">'
      . Html::beginForm(['/site/logout'])
      . Html::submitButton(
          Yii::t('app', 'Logout ({username})', ['username' => Yii::$app->user->identity->username]),
          ['class' => 'nav-link btn btn-link logout']
      )
      . Html::endForm()
      . '</li>';
}

// Talenmenu
$items = [];
foreach (Yii::$app->params['languages'] as $key => $language) {
  $items[] = [
      'label' => $language,
      'url' => Url::to(['site/index', 'language' => $key]),
      'linkOptions' => ['id' => $key, 'class' => 'language'],
  ];
}

// Bouw het menu met behulp van Nav::widget
echo Nav::widget([
  'options' => ['class' => 'navbar-nav ms-auto'],
  'encodeLabels' => false,
  'items' => array_merge(
      $menuItems,
      [
          [
              'label' => Yii::t('app', 'Language'),
              'url' => '#',
              'options' => ['class' => 'language', 'id' => 'languageTop'],
              'encodeLabels' => false,
              'items' => $items,
          ],
      ]
  ),
]);


    NavBar::end();
    ?>

  </header>

  <main id="main" class="flex-shrink-0" role="main">
    <div class="container">
      <?php if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
      <?php endif ?>
      <?= Alert::widget() ?>
      <?= $content ?>
    </div>
  </main>

  <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<style>


.navbar {
  height: 240px; 
  width: 94vw; 
  background-color: #333; 
  position: absolute;
  left: 50px;
  top: 15px;
}

.navbar-nav {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%; 
}

.navbar-nav > li {
  margin: 0 10px; 
}

.navbar-nav > li > a {
  color: white; 
  font-size: 20px;
  text-decoration: none; 
}

/* Hover-stijlen voor de menu-items */
.navbar-nav > li > a:hover {
  color: lightblue;
}

/* Actieve menu-item stijlen */
.navbar-nav > .active > a {
  font-weight: bold;
}


</style>