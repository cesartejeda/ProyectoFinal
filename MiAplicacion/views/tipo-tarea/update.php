<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TipoTarea */

$this->title = 'Update Tipo Tarea: ' . ' ' . $model->idtipotarea;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Tareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtipotarea, 'url' => ['view', 'id' => $model->idtipotarea]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-tarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
