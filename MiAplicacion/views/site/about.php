<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Acerca de';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Este Administrador de Tareas fue creado para la materia de Programación Web.

    </p>

    <code><?= __FILE__ ?></code>
</div>
