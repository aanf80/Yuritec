<?php
/**
 * Created by PhpStorm.
 * User: Concurso18
 * Date: 01/03/2017
 * Time: 01:25 PM
 */
?>
<script src="js/category.js"></script>
<div class="container">
    <h2>Apartados Temáticos</h2>

    <!-- Aqui inicia el formulario-->
    <div class="col-md-8">
        <form id="frmCategoria">
            <label>Nombre</label>

            <input type="text" class="form-control" id="nombreCategoria" name="nombreCategoria"
                   placeholder="Nombre del apartado temático">
            <div class="row">&nbsp;</div>
            <button type="submit" class="btn btn btn-warning"><span
                        class="glyphicon glyphicon-floppy-save"></span>
                Guardar
            </button>
        </form>
    </div>
    <div class="row">&nbsp;</div>
    <div class ="row"><hr></div>
    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table id="tbCategoria">
                <thead>
                <tr>
                    <th>Clave</th>
                    <th>Apartado Temático</th>
                    <th>Operaciones</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
