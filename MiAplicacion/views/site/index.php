<?php

/* @var $this yii\web\View */
/* Edicion Cesar, Jonathan, Andres, Titulos, encabezados y contenido */
$this->title = 'Proyecto';
?>
<div class="site-index">

    <div class="jumbotron">
    
        <h1>Bienvenido!</h1>

        <p class="lead">Administrador de Tareas</p>
         <p class="lead">El clima para Tepic es:</p>

 <center><a href="http://www.accuweather.com/es/mx/tepic/234337/weather-forecast/234337" class="aw-widget-legal">
 </a><div id="awcc1449613146337" class="aw-widget-current"  data-locationkey="234337" data-unit="c" data-language="es" data-useip="false" data-uid="awcc1449613146337"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script></center>
        <p><a class="btn btn-lg btn-success" href="#">↓ Nuestro contenido ↓</a></p>
    </div>
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
