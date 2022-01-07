<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AlertasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alertas';
$this->params['breadcrumbs'][] = $this->title;

?>
<?//= $model->render('view') ?>

<div class="alertas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Alertas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'titulo:ntext',
            'descripcion:ntext',
            'fecha_inicio',
            'duracion_estimada',
            'direccion:ntext',
            'notas_lugar:ntext',
            ['class' => 'yii\grid\DataColumn','attribute' => 'area_id','content'=>function ($model){return '<a href="index.php?AlertaComentariosSearch[alerta_id]='.$model->area_id.'&r=alerta-comentarios%2Findex">'.$model->area_id.'</a>';}],
            'detalles:ntext',
            'notas:ntext',
            'url:ntext',
            'imagen_id',
            'imagen_revisada',
            'categoria_id',
            'activada',
            'visible',
            'terminada',
            'fecha_terminacion',
            'notas_terminacion:ntext',
            'num_denuncias',
            'fecha_denuncia1',
            'bloqueada',
            'bloqueo_usuario_id',
            'bloqueo_fecha',
            'bloqueo_notas:ntext',
            'crea_usuario_id',
            'crea_fecha',
            'modi_usuario_id',
            'modi_fecha',
            'notas_admin:ntext',

            ['class' => 'yii\grid\ActionColumn'],

            /* todas las pruevas hasta dar con la solucion
            ['header' => 'area_id',
                'class' => 'yii\grid\ActionColumn',
                'template' => '{consultar}',
                'buttons'=>[
                    'consultar'=>function ($url, $model) {
                        return Html::a($model->area_id, $url);
                    },
                ],

                'urlCreator'=> function ($action, $model, $key, $index) {
                    if ($action === 'consultar') {
                        return 'index.php?AlertaComentariosSearch[alerta_id]='.$model->area_id.'&r=alerta-comentarios%2Findex';
                    }
                }
            ],
             ['attribute' => 'area_id',
                'class' => 'yii\grid\DataColumn',
                'content' => function ($url, $model, $key, $index) {
                        return '<a href="index.php?AlertaComentariosSearch[alerta_id]=22&r=alerta-comentarios%2Findex">hola</a>';},
            ],
            /*[
                'class' => 'yii\grid\DataColumn',
                'content' => function ($url, $model, $key, $index) {
                    if ($model->area_id) {
                        return $model->area_id;
                    }
                        
                        },
            ],
            [
            'attribute' => 'area_id',
            'content'=>function ($model){
                return '<a href="index.php?AlertaComentariosSearch[alerta_id]='.$model->area_id.'&r=alerta-comentarios%2Findex">'.$model->area_id.'</a>';
            }

        ]*/],
    ]); ?>


</div>
