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
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/sweetalert.css">
    <link rel="stylesheet" href="//cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css">

    <script type="text/javascript" src="js/pluggins/jquery.min.js"></script>
    <script type="text/javascript" src="js/pluggins/jquery.validate.js"></script>
    <script type="text/javascript" src="js/pluggins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src ="//cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <script src="js/pluggins/bootstrap.min.js"></script>
    <script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script src="js/pluggins/jqBootstrapValidation.js"></script>
    <script src="js/pluggins/Moment.js"></script>
    <script src="js/pluggins/sweetalert.min.js"></script>
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
                    <li>
                        <a href="contact.php">Contacto</a>
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
                        <a href="copies.php">Ejemplares</a>
                    </li>
                    <li>
                        <a href="map.php">Mapa del Sitio</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Perfil <b
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

<div id="content">
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <header id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="fill"
                             style="background-image:url('http://www.ittepic.edu.mx/images/2012/642/princ.jpg');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 1</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill"
                             style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 2</h2>
                        </div>
                    </div>
                    <div class="item">
                        <div class="fill"
                             style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                        <div class="carousel-caption">
                            <h2>Caption 3</h2>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </header>

            <div class="col-lg-12">
                <h1 class="page-header">
                    Bienvenido a la revista científica del ITTepic
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.3.7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla
                            aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus
                            eveniet incidunt dicta nostrum quod?</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                    reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia
                    dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum
                        deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
        <script>
            $('.carousel').carousel({
                interval: 5000 //changes the speed
            })
        </script>
    </div>

</div>

</body>

</html>
