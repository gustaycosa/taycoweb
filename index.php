<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<?php include('funciones.php');?>
<html class="no-js" lang="es">
<!--<![endif]-->

<?php include('head.php');?>

<body id="top">

    <?php include('header.php');?>
    <?php include('login.php');?>
    <section id="home" data-parallax="scroll" data-image-src="data:image/jpeg;base64,<?php include('back.php');?>" data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">

            <div class="row contents">
                <div class="home-content-left">

                    <h3 data-aos="fade-up">Bienvenido a TAYCOSA</h3>

                    <h1 data-aos="fade-up">
                        Venta de maquinaria JCB, <br>
                        refacciones, <br>
                        servicios y mas!
                    </h1>

                    <div class="buttons" data-aos="fade-up">
                        <a href="#download" class="smoothscroll button stroke">
                            <span class="icon-circle-down" aria-hidden="true"></span>
                            Ver productos
                        </a>
                        <a href="#" data-lity class="button stroke">
                            <span class="icon-play" aria-hidden="true"></span>
                            Contactanos
                        </a>
                    </div>

                </div>

                <div class="home-image-right">
                    <img src="images/iphone-app-470.png" srcset="images/iphone-app-470.png 1x, images/iphone-app-940.png 2x" data-aos="fade-up">
                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scrolea Abajo</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section>

    <section id="about">

        <div class="row about-intro">

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">Acerca de TAYCOSA</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">
                    Nos dedicamos a la venta de maquinaria pesada para el ramo agricola y de contruccion, asi como venta y distribucion de refacciones y servicio a maquinaria pesada.
                </p>
            </div>

        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-window"></i></span>

                    <div class="service-content">

                        <h3>Venta de refacciones</h3>

                        <p>Nos encargamos de provisionarle las refacciones y los kit necesarios para su maquinaria JCB, tambien contamos con refacciones genericas y aceites.
                        </p>

                    </div>

                </div>

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-image"></i></span>

                    <div class="service-content">
                        <h3>Venta de maquinaria nueva y usada</h3>

                        <p>¿Busca algo en especial? podemos ofrecerle el mejor equipo JCB nuevo y listo para la accion, asi como tambien contamos con equipo con horas trabajadas a buen precio.
                        </p>

                    </div>

                </div>

                <div class="bgrid feature" data-aos="fade-up">

                    <span class="icon"><i class="icon-paint-brush"></i></span>

                    <div class="service-content">
                        <h3>Servicios preventivos y correctivos</h3>

                        <p>¿Su maquinaria falla? ¿o simplemente busca realizar el mantenimiento debido? en TAYCOSA le ayudamos y orientamos con los servicios correspondiente.
                        </p>

                    </div>

                </div>

            </div>

        </div>

        <div class="row about-how">

            <h1 class="intro-header" data-aos="fade-up">¿Como solicito un servicio?</h1>

            <div class="about-how-content" data-aos="fade-up">
                <div class="about-how-steps block-1-2 block-tab-full group">

                    <div class="bgrid step" data-item="1">
                        <h3>Contacta a TAYCOSA</h3>
                        <p>Contactanos via telefonica o via email, cuentanos que lo deseas.
                        </p>
                    </div>

                    <div class="bgrid step" data-item="2">
                        <h3>Evaluacion</h3>
                        <p>Evaluamos las mejores opciones disponibles para su maquinaria pesada.
                        </p>
                    </div>

                    <div class="bgrid step" data-item="3">
                        <h3>Te cotizamos</h3>
                        <p>Nuestro personal te creara una cotizacion de lo que buscas y te la enviara lo antes posible.
                        </p>
                    </div>

                    <div class="bgrid step" data-item="4">
                        <h3>Servicio</h3>
                        <p>Si la cotizacion te convence nuestro personal pondra manos a la obra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" style="background:#FFF;">
        <div id="divmaquinaria" class="container">
            <h2>maqinaria jcb</h2>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_retroescavador" class="col-sm-12" href="maq/maq-retrx.php"></a>
                <span>retroexcavadora</span>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_telescopico" class="col-sm-12" href="maq/maq-teleh.php"></a>
                <span>telescopico</span>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_cfrontal" class="col-sm-12" href="maq/maq-cfrontal.php"></a>
                <span>cargador frontal</span>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_minicargador" class="col-sm-12" href="maq/maq-mcarg.php"></a>
                <span>minicargador</span>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_miniexcavadora" class="col-sm-12" href="maq/maq-excav.php"></a>
                <span>excavadora</span>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <a id="jcb_miniretroexcavadora" class="col-sm-12" href="maq/maq-mexca.php"></a>
                <span>mini retroexcavadora</span>
            </div>
        </div>
    </section>

    <?php include('footer.php');?>
    <?php include('script.php');?>

</body>

</html>
