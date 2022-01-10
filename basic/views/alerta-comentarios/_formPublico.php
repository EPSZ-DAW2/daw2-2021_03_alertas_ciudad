<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="alerta-comentarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alerta_id')->textInput() ?>

    <?= $form->field($model, 'texto')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Guardar',['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
