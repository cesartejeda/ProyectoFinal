<?php

/* @var $this yii\web\View */
/* Edicion Cesar, Titulos y encabezados */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
    
        <h1>Bienvenido!</h1>

        <p class="lead">Administrador de Tareas</p>
        <p class="lead">Contenido</p>
        <p><a class="btn btn-lg btn-success" href="#">↓</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                 <h2>Tareas</h2>

                <p>Podrás agregar tareas y almacenarlas. Las tareas que estarán disponibles aparecen aquí.</p>

                <p><a class="btn btn-default" href="index.php?r=tarea/index">Ir a Tareas &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <div class="col-lg-4">
                <h2>Usuarios</h2>

                <p>Aquí se encuentran los usuarios y también se pueden agregar nuevos usuarios.</p>

                <p><a class="btn btn-default" href="index.php?r=usuario/index">Ir a Usuarios &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Tipos de Tarea</h2>

                <p>Aquí se encuentran los tipos de tareas, se pueden agregar nuevos.</p>

                <p><a class="btn btn-default" href="index.php?r=tipo-tarea/index">Ir a Tipo de Tareas &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
