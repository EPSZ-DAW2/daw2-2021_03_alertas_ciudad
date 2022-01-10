<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioIncidenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incidencias del Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-incidencias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario Incidencias', ['usuario-incidencias/createpublico'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'crea_fecha',
            //'clase_incidencia_id',
            'texto:ntext',
            //'destino_usuario_id',
            //'origen_usuario_id',
            //'alerta_id',
            //'comentario_id',
            //'fecha_lectura',
            //'fecha_borrado',
            //'fecha_aceptado',

            /*['class' => 'yii\grid\ActionColumn',
                'header' => 'Incidencias',
                'template' => '{incidencias}',
                'buttons'=>[

                    'incidencias'=>function ($url,$model) {
                        $base= explode('&',$url);
                        return Html::a('<span class="material-icons md-light md-inactive">area_chart</span>', $base[0]."&UsuarioIncidenciasSearch%5Barea_id%5D=".$model->area_id, ['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                    },
            ],  //los botones 
        ],*/
     ],
    ]); ?>


</div>

