<?php

use yii\helpers\Html;
use yii\grid\GridView;

echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">';

/* @var $this yii\web\View */
/* @var $searchModel app\models\AreasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Alertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="areas-index">

    <h1>Buscador de alertas</h1>

    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           'titulo',
           'descripcion',
           'detalles',
           'area_id',
            ['class' => 'yii\grid\ActionColumn',
            'header' => 'Ver ficha ',
            'template' => '{view}',
            'buttons'=>[

                'create'=>function ($url) {
                    return Html::a('<span class="material-icons md-light md-inactive">add</span>', $url, ['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                },

                
            ],
        ],

        ['class' => 'yii\grid\ActionColumn',
            'header' => 'Areas',
            'template' => '{areas}',
            'buttons'=>[

                 'areas'=>function ($url,$model) {
                    $base= explode('&',$url);
                    return Html::a('<span class="material-icons md-light md-inactive">area_chart</span>', $base[0]."&AreasSearch%5Barea_id%5D=".$model->area_id, ['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                },
                
            ],
        ],

        ['class' => 'yii\grid\ActionColumn',
            'header' => 'Estado',
            'template' => '{estado}',
            'buttons'=>[
                'estado'=>function ($url,$model) {
                    $base= explode('&',$url);
                    return Html::a('<span class="material-icons md-light md-inactive">radio_button_checked</span>', 'index.php?r=alertas%2Festado&id=4859720', ['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                }
                
            ],
        ],

        ['class' => 'yii\grid\ActionColumn',
            'header' => 'Comentarios',
            'template' => '{comentarios}',
            'buttons'=>[
                'comentarios'=>function ($url,$model) {
                    $base= explode('&',$url);
                    return Html::a('<span class="material-icons md-light md-inactive">chat</span>', $url,['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                }],
                'urlCreator'=> function ($action, $model, $key, $index) {
                    if ($action === 'comentarios') {
                        return 'index.php?r=site%2Fcomentarios&AlertaComentariosSearch[alerta_id]='.$model->id;
                    }
                }
            ],

    ],
    ]); 
    
    if(isset($error)){
        if($error=='1010'){
            echo '<script>alert("No se pueden borrar areas que contengan subareas")</script>';
        }
    }
    
    ?>

</div>
