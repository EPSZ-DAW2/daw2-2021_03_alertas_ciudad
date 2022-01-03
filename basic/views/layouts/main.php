<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => 'Alertas Ciudad',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);

    /*echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Alertas', 'url' => ['/site/alertas']],
            ['label' => 'Etiquetas', 'url' => ['/site/etiquetas']],
            ['label' => 'Areas', 'url' => ['/site/areas']],
            ['label' => 'Incidencias', 'url' => ['/site/incidencias']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']],
                ['label' => 'Registrarse', 'url' => ['/site/registrarse']],
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);*/
    if(Yii::$app->user->isGuest == FALSE)
    {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Alertas', 'url' => ['/site/alertas']],
                ['label' => 'Etiquetas', 'url' => ['/site/etiquetas']],
                ['label' => 'Areas', 'url' => ['/site/areas']],
                ['label' => 'Incidencias', 'url' => ['/site/incidencias']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'

            ],
        ]);
    }
    else
    {
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav ms-auto'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Alertas', 'url' => ['/site/alertas']],
                ['label' => 'Etiquetas', 'url' => ['/site/etiquetas']],
                ['label' => 'Areas', 'url' => ['/site/areas']],
                ['label' => 'Incidencias', 'url' => ['/site/incidencias']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
                ['label' => 'Login', 'url' => ['/site/login']],
                ['label' => 'Registrarse', 'url' => ['/site/registrarse']],
            ],
        ]);
    }


    NavBar::end();
    ?>

</header>



<main role="main" class="flex-shrink-0">
    
        <?php
        /* PARTE PRIVADA */
        if(Yii::$app->user->identity != NULL) 
        { 
            echo " <div class='submenu'>ACCIONES CRUD</div>";
        }
        //if(Yii::$app->user->identity == "moderador") { echo "menu moderador";}
        //if(Yii::$app->user->identity == "admin") {  echo "menu admin";}
    
        ?>
    

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; Alertas Ciudad <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
