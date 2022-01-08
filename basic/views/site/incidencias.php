<?php
use yii\helpers\Html;
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