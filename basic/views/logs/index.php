<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LogsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Logs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'crea_fecha',
            'clase_log_id',
            'modulo',
            'texto:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
<?php 

var_dump(Yii::$app->log->logger->messages)

/*
[
  [0] => message (mixed, can be a string or some complex data, such as an exception object)
  [1] => level (integer)
  [2] => category (string)
  [3] => timestamp (float, obtained by microtime(true))
  [4] => traces (array, debug backtrace, contains the application code call stacks)
  [5] => memory usage in bytes (int, obtained by memory_get_usage()), available since version 2.0.11.
]*/

?>