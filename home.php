<?php
    ob_start();
    session_start();
    
    // it will never let you open index(login) page if session is set
    if (isset($_GET['logout'])) {
        unset($_SESSION['site']);
        session_unset();
        session_destroy();
    }
    if ( isset($_SESSION['user'])!="" ) {
        header("Location: index.php");
        exit;
    }
    $error = false;

    if( isset($_POST['btn-login']) ) {

        $senha = trim($_POST['senha']);
        $senha = strip_tags($senha);
        $senha = htmlspecialchars($senha);

        if(empty($senha)){
            $error = true;
            $passError = "Digite alguma senha!.";
        }


        if (!$error) {


            if( $senha == "121094") {
                $_SESSION['site'] = "Foi";
                header("Location: index.php");
            } else {
                $errMSG = "Senha Incorreta!...";
            }

        }

    }
?>



<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noodp">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Mousebox - Desenvolvimento Web</title>
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/asf2525xljt.css"> </head>

<body>
    <div id="main">
        <div id="page-loader">
            <div class="spinner-container">
                <div class="css-spinner"></div>
            </div>
        </div>
        <div class="options-panel" style="display: none;">
            <div class="content-panel">
                <h2>Example Options</h2> <span class="ti-settings panel-button"></span>
                <h4 class="pei">Particle Effect</h4>
                <div id="particle-effect" class="option-block">
                    <p class="gravity-remove-button">Remove</p>
                </div>
                <h4>Overlay Scheme</h4>
                <div id="overlay-skin" class="option-block">
                    <p class="overlay-skin-black nvb active">Black</p>
                    <p class="overlay-skin-white nvb">White</p>
                </div>
                <h4>Overlay Animation</h4>
                <div id="overlay-animation" class="option-block">
                    <p class="overlay-animation-fade nvb active">Fade</p>
                    <p class="overlay-animation-slide nvb">Slide</p>
                </div>
                <h4>Overlay Content Animation</h4>
                <div id="overlay-content-animation" class="option-block">
                    <p class="overlay-content-animation-fade nvb">Fade</p>
                    <p class="overlay-content-animation-slide nvb active">Slide</p>
                </div>
                <h4>Overlay Bullet Navigation</h4>
                <div id="bullet-navigation" class="option-block">
                    <p class="bullet-navigation-on nvb active">On</p>
                    <p class="bullet-navigation-off nvb">Off</p>
                </div>
                <p class="bottom-line">* Change 50+ options via the included configuration file in your download package!</p>
            </div>
        </div>
        <section id="hero" class="hero hero-1">
            <div class="front-content page-enter-animated">
                <div class="container-mid"> <img class="logo" src="comuns/img/logo_white_2x.png" alt="logo">
                    <div class="cycle-wrapper">
                        <div id="cycle">
                            <div class="slide">
                                <h1>DESIGN<span> & </span><br>CREATIVE DIGITAL<br>SOLUTIONS.</h1></div>
                            <div class="slide">
                                <h1>AGENCY<span> & </span><br>BUSINESS DESIGN<br>STRATEGYS.</h1></div>
                            <div class="slide">
                                <h1>MODERN<span> & </span><br>CREATIVE TEMPLATE<br>DEVELOPMENT.</h1></div>
                        </div>
                    </div>
                    <p>OUR WEBSITE IS COMING SOON</p>
                    <div class="arrow-wrap go-down">
                        <div class="open-overlay down-button"> <i class="ti-arrow-down"></i> <i class="ti-arrow-down"></i> </div>
                    </div>
                </div>
            </div>
            <div class="background-content page-enter-animated">
                <div class="level-1">
                    <div class="bg-overlay"></div>
                    <div class="bg-pattern"></div>
                    <div id="canvas">
                        <canvas class="bg-effect layer" data-depth="0.2"></canvas>
                    </div>
                </div>
                <div class="level-2">
                    <div class="bg-image layer" data-depth="0.04"></div>
                    <div class="bg-video layer" data-depth="0.04"></div>
                    <div class="bg-color layer" data-depth="0.04"></div>
                </div>
            </div>
        </section>
        <div id="overlay">
            <section class="overlay">
                <div id="about" class="content">
                    <div class="container-mid">
                        <div class="container">
                            <h1>OUR WEBSITE IS COMING SOON</h1>
                            <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, </p>
                            <form action="http://creazione.avanzare.co/gravity/demo/assets/php/subscribe.php" method="post" class="subscribe-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group input-group-lg">
                                            <input type="text" name="email" placeholder="* Enter your email to Subscribe!" class="email form-control">
                                            <div class="fhp-input">
                                                <input type="text" name="phone" placeholder="* Enter your phone to Subscribe!" class="email form-control">
                                            </div>
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-primary form-control"> <i class="ti-arrow-right first"></i><i class="ti-arrow-right second"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <ul class="social-icons">
                                <li>
                                    <a data-placement="bottom" title="Facebook" class="ti-facebook" href="#">
                                        <div class="overlay"></div>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="bottom" title="Twitter" class="ti-twitter-alt" href="#">
                                        <div class="overlay"></div>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="bottom" title="Google+" class="ti-google" href="#">
                                        <div class="overlay"></div>
                                    </a>
                                </li>
                                <li>
                                    <a data-placement="bottom" title="Contact" class="fa fa-envelope go-down" href="#">
                                        <div class="overlay"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="overlay">
                <div id="contact" class="content">
                    <div class="container-mid">
                        <div class="container">
                            <h1>Contato</h1>
                            <p> Want to say hello? Want to know more about us? Drop us an email and we will get back to you as soon as we can. </p>
                            <div style="    width: 572px; margin-left: 27%;" align="center">
                                <script type="text/javascript" defer src="//www.123contactform.com/embed/2839043.js" data-role="form" data-default-width="350px"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="up-button go-up"><i class="ti-arrow-up"></i><i class="ti-arrow-up"></i></div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/xsg235t4r1r.js"></script>
</body>
<!-- Mirrored from creazione.avanzare.co/gravity/demo/index.html?bg=kenburns by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 12:23:23 GMT -->

</html>