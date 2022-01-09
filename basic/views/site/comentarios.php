<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlertaComentariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comentarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alerta-comentarios-index">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alerta_id',
            //'crea_usuario_id',
            //'crea_fecha',
            //'modi_usuario_id',
            //'modi_fecha',
            'texto:ntext',
            //'comentario_id',
            //'cerrado',
            'num_denuncias',
            //'fecha_denuncia1',
            //'bloqueado',
            //'bloqueo_usuario_id',
            //'bloqueo_fecha',
            //'bloqueo_notas:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


    <p>
        <?= Html::a('Volver', ['alertas'], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Agregar comentario', ['crearcomentario'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Denunciar', ['create'], ['class' => 'btn btn-danger']) ?>

    </p>


</div>
