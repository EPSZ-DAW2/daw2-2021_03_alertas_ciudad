<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioIncidencias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-incidencias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'crea_fecha')->textInput() ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>

    <!-- El resto del formulario oculto porque es la parte pública  -->
   
    <?php  echo $form->field($model, 'origen_usuario_id')->hiddenInput(['origen_usuario_id'=> $model->origen_usuario_id])->label(false); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
