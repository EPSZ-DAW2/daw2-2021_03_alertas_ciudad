<?php
use yii\helpers\Html;
use yii\grid\GridView;



/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioIncidenciasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incidencias del Usuario';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-incidencias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Usuario Incidencias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'crea_fecha',
            'clase_incidencia_id',
            'texto:ntext',
            'destino_usuario_id',
            'origen_usuario_id',
            //'alerta_id',
            //'comentario_id',
            //'fecha_lectura',
            //'fecha_borrado',
            //'fecha_aceptado',

            ['class' => 'yii\grid\ActionColumn'],  //los botones 
        ],
    ]); ?>


</div>
<?php
use yii\widgets\ActiveForm;
?>

<h1>Incidencias del Usuario</h1>
<ul>
<?php //foreach ($dataProvider->getModels() as $usuario_incidencias): ?>
    <li>
        <?//= Html::encode("{$usuario_incidencias->crea_fecha} ({$incidencias->clase_incidencia})") ?>:
        <?//= $incidencias->texto ?>
    </li>
<?php// endforeach; ?>
</ul>

<?php
$usuario_incidencias = User::model()->findByAttributes('id' => Yii::app()->user->id); // Recuperas un profesor mediante el identificador del usuario logueado

if(isset($usuario_incidencias->id))// Considero que en tu modelo TEACHER tienes declarada la relation "relSubjects".

{

     foreach($usuario_incidencias->id as $incidencia)

     {

          echo($incidencia->crea_fecha);

     }

}
?>

