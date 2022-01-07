<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuarios-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
        if(isset($_GET['rolnuevo'])){
            Yii::$app->user->identity->rol=$_GET['rolnuevo'];
            $model->rol = $_GET['rolnuevo'];
    
        }
        if($model->rol == 'S'){ $model->rol = 'Administrador del Sistema';}
        if($model->rol == 'A'){ $model->rol = 'Administrador';}
        if($model->rol == 'M'){ $model->rol = 'Moderador';}
        if($model->rol == 'N'){ $model->rol = 'Usuario';}
    ?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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

<?php 

if($model->rol == 'Administrador del Sistema')
{ ?>
    <?= Html::a('Cambiar a usuario', ['perfil', 'id' => $model->id, 'rolnuevo' => 'N'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Cambiar a moderador', ['perfil', 'id' => $model->id, 'rolnuevo' => 'M'], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Cambiar a administrador', ['perfil', 'id' => $model->id, 'rolnuevo' => 'A'], ['class' => 'btn btn-primary']) ?>
    <hr><p>Para volver a tener el rol de administrador de sistema, vuelva a iniciar sesion</p>
    <?php


}




?>