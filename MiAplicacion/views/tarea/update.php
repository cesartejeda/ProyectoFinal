<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tarea */

$this->title = 'Update Tarea: ' . ' ' . $model->idtarea;
$this->params['breadcrumbs'][] = ['label' => 'Tareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtarea, 'url' => ['view', 'id' => $model->idtarea]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tarea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
