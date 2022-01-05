<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        if($model->rol == 'A'){ $model->rol = 'Administrador';}
        if($model->rol == 'M'){ $model->rol = 'Moderador';}
        if($model->rol == 'N'){ $model->rol = 'Usuario';}
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'email:email',
            'password',
            'nick',
            'nombre',
            'apellidos',
            'fecha_nacimiento',
            'direccion:ntext',
            'rol',
            'fecha_registro',

        ],
    ]) ?>

</div>
