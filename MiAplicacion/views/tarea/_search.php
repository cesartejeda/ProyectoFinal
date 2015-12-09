<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tarea-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtarea') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'fecha_ini') ?>

    <?= $form->field($model, 'fecha_fin') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?php // echo $form->field($model, 'usuario_idusuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
