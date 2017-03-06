<?php
/**
 * Created by PhpStorm.
 * User: Concurso18
 * Date: 06/03/2017
 * Time: 11:45 AM
 */
?>
<div class="container">
    <div id="content">
        <div align="center">
            <img src="img/logo.gif"  alt="">
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="col col-lg-6 col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
        <form id="frmLogin" >
            <label class="control-label" for="username">Usuario:</label>
            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre del usuario">
            </div>
            <label class="control-label" for="password">Contraseña:</label>
            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">

            </div>
            <div class="row">&nbsp;</div>
            <button type="submit" class="btn btn-block btn-warning btn-lg">Acceder</button>
        </form>
    </div>
</div>
