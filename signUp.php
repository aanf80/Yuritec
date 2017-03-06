<?php
/**
 * Created by PhpStorm.
 * User: Concurso18
 * Date: 06/03/2017
 * Time: 11:35 AM
 */
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Revista Científica ITTepic</title>

    <!-- Bootstrap Core CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.growl.css">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="js/pluggins/jquery.min.js"></script>
    <script type="text/javascript" src="js/pluggins/jquery.validate.js"></script>

    <script src="js/pluggins/bootstrap.min.js"></script>
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="js/pluggins/jqBootstrapValidation.js"></script>
    <script src="js/pluggins/Moment.js"></script>
    <script src="js/pluggins/bootstrap-datetimepicker.js"></script>

    <script src="js/pluggins/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="js/pluggins/jquery.growl.js"></script>


    <script src="js/app.js"></script>

</head>
<body>

<!-- Navigation -->
<div id="nav">
    <div align="center">
        <img src="http://www.ittepic.edu.mx/images/header2.jpg" class="img-responsive" alt=""/>
    </div>

    <nav class="navbar navbar-inverse ">

        <div class="container">

            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="principal.php">Inicio</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">Acerca de</a>
                    </li>
                    <li>
                        <a href="contact.php">Contacto</a>
                    </li>
                    <li>
                        <a href="copies.php">Ejemplares</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Área Personal <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php">Datos personales</a>
                            </li>
                            <li>
                                <a href="password.php">Seguridad</a>
                            </li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Artículos <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-home-1.html">Artículos enviados</a>
                            </li>
                            <li>
                                <a href="edition.php">Editor de artícukos</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Configuraciones<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="categories.php">Gestión de Categorias</a>
                            </li>
                            <li>
                                <a href="magazine.php">Gestión de Revista</a>
                            </li>
                            <li>
                                <a href="users.php">Gestión de Usuarios</a>
                            </li>
                            <li>
                                <a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="map.php">Mapa del Sitio</a>
                    </li>
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión</a>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container -->

    </nav>


</div>

<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Registrarse</h3>
            <ol class="breadcrumb">
                <li><a href="index.html">Inicio</a>
                </li>
                <li class="active">Registro</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-lg-5">
            <form name="" id="formRegistro">
                <div class="form-group">
                    <label for="email">Correo electrónico *</label>
                    <input type="email" placeholder="jorge@ittepic.edu.mx" id="email" required data-validation-required-message="Por favor ingresa tu correo electrónico." class="form-control">
                    <div class="help-block">Será su nombre de usuario</div>
                </div>
                <div class="form-group">
                    <label for="psw">Contraseña *</label>
                    <input type="password" id="psw" required data-validation-required-message="Por favor ingresa tu contraseña."class="form-control">
                    <div class="help-block"></div>
                </div>

                <div class="form-group">
                    <label for="conf-psw">Confirmar contraseña *</label>
                    <input type="password" required data-validation-required-message="Por favor confirma tu contraseña." class="form-control" id="conf-psw">
                    <div class="help-block"></div>
                </div>

                <div class="form-group">
                    <label for="fotoPerfil">Seleccionar foto de perfil</label>
                    <input type="file" id="fotoPerfil">
                </div>

                <div class="form-group">
                    <label>Nombre *</label>
                    <input type="text" placeholder="Nombre(s)" required data-validation-required-message="Por favor ingresa tu nombre." class="form-control">
                    <div class="help-block"></div>
                    <input type="text" placeholder="Apellidos" required data-validation-required-message="Por favor ingresa tus apellidos." class="form-control">
                </div>

                <div class="form-group">
                    <label for="iniciales">Iniciales</label>
                    <input type="text" id="iniciales" class="form-control">
                    <span class="help-block">Ej. Axel García Pérez = AGP</span>
                    <div class="help-block"></div>
                </div>

                <div class="form-group">
                    <label for="firma">Firma</label>
                    <input type="text" id="firma" class="form-control">
                    <div class="help-block"></div>
                </div>

                <div class="form-group">
                    <div><label>Sexo</label></div>
                    <label class="radio-inline">
                        <input type="radio" value="f" name="sexo" id="fem"> Femenino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="m" name="sexo" id="masc"> Masculino
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="o" name="sexo" id="otro"> Otro
                    </label>
                    <div class="help-block"></div>
                </div>

                <div class="form-group">
                    <label for="institucion">Institución</label>
                    <textarea id="institucion" class="form-control" rows="2"></textarea>
                    <div class="help-block">Ej. Instituto tecnológico de Tepic</div>
                </div>
                <div class="form-group">
                    <div>
                        <label for="resumen">Resumen biográfico</label>
                        <textarea name="" id="resumen" rows="6" class="form-control"></textarea>
                        <div class="help-block">Ej. Departamento y Rango</div>
                    </div>
                </div>
                <h4><strong>Domicilio</strong></h4>
                <div class="form-group row">
                    <div class="col-md-9">
                        <label for="calle">Calle</label>
                        <input type="text" id="calle" class="form-control">
                        <div class="help-block"></div>

                        <label for="colonia">Colonia</label>
                        <input type="text" id="colonia" class="form-control">
                        <div class="help-block"></div>
                    </div>

                    <div class="col-lg-3">
                        <label for="numero">Número</label>
                        <input type="number" id="numero" class="form-control">
                        <div class="help-block"></div>

                        <label for="cp">C. P.</label>
                        <input type="number" id="cp" class="form-control">
                        <div class="help-block"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" id="ciudad" class="form-control">
                        <div class="help-block"></div>
                    </div>
                    <div class="col-lg-6">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" class="form-control">
                        <div class="help-block"></div>
                    </div>
                    <div class="col-lg-12">
                        <label class="col-lg-12" for="pais">País</label>
                        <select class="form-control" id="pais">
                            <option value=""></option>
                            <option value="">México</option>
                            <option value="">Estados Unidos</option>
                            <option value="">Canadá</option>
                            <option value="">Argentina</option>
                        </select>
                        <div class="help-block"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label>* Campo requerido</label>
                    <div class="checkbox">
                        <label for="confirm"><input id="confirm" type="checkbox">Enviar correo electrónico de
                            confirmación con usuario y contraseña</label>
                    </div>
                </div>
                <div id="success"></div>
                <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-floppy-save"></span> Registrarse</button>
                <button type="clear" class="btn btn-warning"><span class="glyphicon glyphicon-floppy-remove"></span> Cancelar</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center">REVISTA DE CIENCIAS DEL INSTITUTO TECNOLÓGICO DE TEPIC. AV. TECNOLÓGICO # 2595,
                    COL. LAGOS DEL COUNTRY. TEPIC, NAYARIT. MÉXICO. C.P. 63175. TEL: (311) 211 94 00.
                    COMUNICACION@ITTEPIC.EDU.MX</p>
            </div>
        </div>
    </footer>

</div>

</body>

</html>
