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
           'Etiquetas',
            ['class' => 'yii\grid\ActionColumn',
            'header' => 'Opciones',
            'template' => '{view}',
            'buttons'=>[
                'create'=>function ($url) {
                    return Html::a('<span class="material-icons md-light md-inactive">add</span>', $url, ['class' => 'glyphicon glyphicon-plus btn btn-default btn-xs custom_button']);
                },
                
            ],
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
