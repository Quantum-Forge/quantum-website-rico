<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MediHub - Medical & Health Template">

    <!-- ========== Page Title ========== -->
    <title>MediHub - Medical & Health Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700,800" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->
    
     <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area double-info text-light bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> antariksaprakarsautama@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="info">
                                    <span>Office Hours</span> Monday - Friday 08:00-19:00
                                </div> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 social text-right">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="#">
                                <input type="text" name="text" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="fas fa-search"></i>
                                </button>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>        
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a class="smooth-menu" href="#home">Beranda</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#departments">Produk Kami</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#doctors">Tentang Kami</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#gallery">Kontak Kami</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Cart</h4>
                      <!-- cart content -->
                        <div class="cart-item">
                            <img src="https://placehold.co/80x100" alt="Product Image" width="80" height="100">
                            <div class="item-details">
                                <a href="#" class="item-name">Rico Botol 600 mL CRT</a>
                                <div class="quantity">
                                    <button class="quantity-btn" id="decrease" onclick="decreaseValue()">-</button>
                                    <input type="text" id="quantity" value="1" min="1">
                                    <button class="quantity-btn" id="increase" onclick="increaseValue()">+</button>
                                </div>
                                <span class="item-price">Rp. 999.999.999</span>
                            </div>
                            <a href="#" class="remove-item"><i class="fa fa-trash"></i></a>
                        </div>
                        <div class="subtotal">
                            <span>Subtotal:</span>
                            <span>Rp. 999.999.999</span>
                        </div>
                        <h4 class="title">Alamat</h4>
                        <div class="row gutter-1">
                            <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="nama">  
                            </div>
                            <div class="col-sm-6">
                                  <input type="number" class="form-control" placeholder="phone number">  
                            </div>
                            <div class="col-md-12 comments">
                                <textarea name="" rows="8" class="form-control" placeholder="alamat" id=""></textarea>
                            </div>
                        </div>
                        <div class="cart-actions">
                            <button class="checkout-btn">Checkout</button>
                        </div>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area responsive-auto-height text-small">
        <div class="item shadow dark text-light bg-fixed" style="background-image: url(assets/img/2440x1578.png);">
            <div class="box-table">
                <div class="box-cell">
                    <div class="container">
                        <div class="row">
                            <div class="content double-items">

                                <div class="col-md-7 col-sm-6">
                                    <h1 data-animation="animated slideInRight">Best care for your <span> Good health</span></h1>
                                    <p data-animation="animated slideInUp">
                                        The ourselves suffering the sincerity. Inhabit her manners adapted age certain. Debating offended at branched striking be subjects.
                                    </p>
                                    <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">View Details</a>
                                </div>

                                <!-- Start Appoinment Form -->
                                <div class="col-md-5 col-sm-6 appoinment">
                                    <div class="appoinment-box">
                                        <div class="heading">
                                            <h2>Make an Appointment</h2>
                                        </div>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Child</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select>
                                                            <option value="1">Department</option>
                                                            <option value="2">Medecine</option>
                                                            <option value="4">Dental Care</option>
                                                            <option value="5">Traumatology</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" id="submit">
                                                        Submit Query <i class="fa fa-paper-plane"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Appoinment Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Start Services
    ============================================= -->
    <div class="services-area inc-icon less-info bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="services-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-doctor-1"></i>
                                <h4>Advanced Care</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-medicine"></i>
                                <h4>Respite Care</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-checkup"></i>
                                <h4>Daily Care</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height">
                        <div class="item">
                            <a href="#">
                                <i class="flaticon-neurology"></i>
                                <h4>Neuorology Care</h4>
                            </a>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>  
            </div>
        </div>
    </div>
    <!-- End Services -->
    
    <!-- Start Departments
    ============================================= -->
    <div id="departments" class="department-tabs default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 tab-navs">
                    <div class="heading">
                        <h4>Our Departments</h4>
                    </div>
                    <!-- Tab Nav -->
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                 Medecine and Health
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                Dental Care and Surgery
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                 Eye Treatment
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                Children Chare
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab5" aria-expanded="false">
                                Nuclear magnetic
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab6" aria-expanded="false">
                                Traumatology
                            </a>
                        </li>
                    </ul>
                    <!-- End Tab Nav -->
                </div>
                <div class="col-md-9 tab-contents">
                    <div class="row">
                        <!-- Start Tab Content -->
                        <div class="tab-content tab-content-info">
                            <!-- Single Item -->
                            <div id="tab1" class="tab-pane fade active in">

                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Medecine and Health</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->

                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab2" class="tab-pane fade">
                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Dental Care and Surgery</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab3" class="tab-pane fade">
                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Eye Treatment</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab4" class="tab-pane fade">
                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Children Chare</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab5" class="tab-pane fade">
                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Nuclear magnetic</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->
                            </div>
                            <!-- End Single Item -->

                            <!-- Single Item -->
                            <div id="tab6" class="tab-pane fade">
                                <!-- Start Department Info -->
                                <div class="col-md-6">
                                    <div class="info title">
                                        <div class="thumb">
                                            <img src="assets/img/1500x700.png" alt="Thumb">
                                        </div>
                                        <h3>Traumatology</h3>
                                        <p>
                                            Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall walk fact bed. 
                                        </p>
                                        <p>
                                            Placing assured be if removed it besides on. Far shed each high read are men over day.
                                        </p>
                                    </div>
                                </div>
                                <!-- End Department Info -->

                                <!-- Start Opening Hours -->
                                <div class="col-md-6 opening-hours">
                                    <div class="opening-info">
                                        <h4>Opening Hours</h4>
                                        <ul>
                                            <li>Sunday <div class="pull-right"> 6.00 am - 10.00 pm </div></li>
                                            <li>Monday <div class="pull-right"> 8.00 am - 4.00 pm </div></li>
                                            <li>Tuesday <div class="pull-right"> 9.00 am - 6.00 pm </div></li>
                                            <li>Wednesday <div class="pull-right"> 10.00 am - 7.00 pm </div></li>
                                            <li>Thursday <div class="pull-right"> 11.00 am - 9.00 pm </div></li>
                                            <li>Friday <div class="pull-right"> 12.00 am - 12.00 pm </div></li>
                                            <li>Saturday <div class="pull-right closed"> Closed </div></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Opening Hours -->
                            </div>
                            <!-- End Single Item -->

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Departments -->

    <!-- Start Doctors 
    ============================================= -->
    <div id="doctors" class="doctor-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Meet Our <span>Specialists</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="doctor-items text-center">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Jessica Jones</h4>
                                <h5>Cardiologist</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Ahel Natasha</h4>
                                <h5>Dental surgeon</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Gabriela Beckett</h4>
                                <h5>Cosmetic Surgeon</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Jessica Jones</h4>
                                <h5>Cardiologist</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Ahel Natasha</h4>
                                <h5>Dental surgeon</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/800x600.png" alt="Thumb">
                                <div class="overlay">
                                    <a href="#"><i class="fas fa-plus"></i></a>
                                </div>
                                <div class="social">
                                    <ul>
                                        <li class="facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <h4>Gabriela Beckett</h4>
                                <h5>Cosmetic Surgeon</h5>
                                <div class="appoinment-btn">
                                    <a href="#">Make appoinment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Doctors -->

    <!-- Start Gallery
    ============================================= -->
    <div id="gallery" class="gallery-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Our <span>Environment</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="gallery-items-area text-center">
                <div class="row">
                    <div class="col-md-12 gallery-content">
                        <div class="mix-item-menu text-center">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".development">Development</button>
                            <button data-filter=".consulting">Consulting</button>
                            <button data-filter=".finance">Finance</button>
                            <button data-filter=".branding">Branding</button>
                            <button data-filter=".capital">Capital</button>
                        </div>
                        <!-- End Mixitup Nav-->

                        <div class="row magnific-mix-gallery text-center masonary">
                            <div id="portfolio-grid" class="gallery-items col-3">
                                <!-- Single Item -->
                                <div class="pf-item development capital">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting finance">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item finance">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item capital development">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="pf-item consulting branding">
                                    <div class="effect-box">
                                        <img src="assets/img/800x800.png" alt="thumb">
                                        <div class="info">
                                          <h4><a href="#">Empire State</a></h4>
                                          <a href="assets/img/800x800.png" class="item popup-link"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Gallery -->

    <!-- Start Fun Factor
    ============================================= -->
    <div class="fun-fact-area default-padding shadow light text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-recovered"></i>
                        <div class="timer" data-to="230" data-speed="5000"></div>
                        <span class="medium">Satisfied Patients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-doctor"></i>
                        <div class="timer" data-to="89" data-speed="5000"></div>
                        <span class="medium">Regular Doctors</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-department"></i>
                        <div class="timer" data-to="50" data-speed="5000"></div>
                        <span class="medium">Departments</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <i class="flaticon-nurse"></i>
                        <div class="timer" data-to="2348" data-speed="5000"></div>
                        <span class="medium">Servant</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->

    <!-- Start Testimonials 
    ============================================= -->
    <div id="testimonials" class="testimonials-area carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Patient <span>Testimonials</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Angle Natasha</h4>
                                    <h5>patient of <span>surgery</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>John Abraham</h4>
                                    <h5>Dental <span>patients</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="content">
                                <p>
                                    Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or. 
                                </p>
                            </div>
                            <div class="provider">
                                <div class="thumb">
                                    <img src="assets/img/800x800.png" alt="Thumb">
                                </div>
                                <div class="info">
                                    <h4>Kriti Sairi</h4>
                                    <h5>patient of <span>surgery</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Recent <span>Blog</span></h2>
                        <p>
                            While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-images"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>15 June, 2019</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">increasing in especially inquietude companions acceptance</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-video"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>17 Auguest, 2019</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Middleton as pretended listening he smallness perceived.</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <img src="assets/img/800x600.png" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <div class="meta">
                                    <ul>
                                        <li><a href="#">Admin</a></li>
                                        <li>25 September, 2019</li>
                                    </ul>
                                </div>
                                <h4>
                                    <a href="#">Offended packages pleasant remainder recommend engrossed</a>
                                </h4>
                                <p>
                                    General enquire picture letters garrets on offices of no on. Say one hearing between excited evening all inhabit thought you.
                                </p>
                                <a class="btn btn-theme circle border btn-sm" href="#">Read More <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->

    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="f-items default-padding">

                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item">
                            <h4>About</h4>
                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.
                            </p>
                            <div class="opening-info">
                                <h5>Opening Hours</h5>
                                <ul>
                                    <li> <span> Mon - Tues :  </span>
                                      <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                    </li>
                                    <li> <span> Wednes - Thurs :</span>
                                      <div class="pull-right"> 8.00 am - 6.00 pm </div>
                                    </li>
                                    <li> <span> Sun : </span>
                                      <div class="pull-right closed"> Closed </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Our Depeartment</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Medecine and Health</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Dental Care and Surgery</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Eye Treatment</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Children Chare</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Nuclear magnetic</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> Traumatology</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-arrow-right"></i> X-ray</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Latest tweets</h4>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="#">@Becare</a> Looking for an awesome CREATIVE WordPress Theme? Find it here: <a target="_blank" href="http://t.co/0WWEMQEQ48">http://t.co/0WWEMQEQ48</a>
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fab fa-twitter"></i><span class="twitter-date"> 01 day ago</span>
                                </div>
                            </div>
                            <div class="twitter-item">
                                <div class="twitter-content">
                                    <p>
                                        <a href="#">@Jisham</a> It is a long established fact that a reader will be distracted by the readable . Find it here: <a target="_blank" href="http://t.co/0WWEMQEQ48">http://t.co/0WWEMQEQ48</a>
                                    </p>
                                </div>
                                <div class="twitter-context">
                                    <i class="fab fa-twitter"></i><span class="twitter-date"> 02 days ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-3 col-sm-6 equal-height item">
                        <div class="f-item contact">
                            <h4>Contact</h4>
                            <ul>
                                <li>
                                    <i class="fas fa-phone"></i> 
                                    <p>Phone <span>+123 456 7890</span></p>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i> 
                                    <p>Email <span><a href="mailto:support@validtheme.com">support@validtheme.com</a></span></p>
                                </li>
                                <li>
                                    <i class="fas fa-map"></i> 
                                    <p>Office <span>123 6th St. Melbourne, FL 32904</span></p>
                                </li>
                            </ul>
                            <h5>Subscribe Newsletter</h5>
                            <form action="#">
                                <div class="input-group stylish-input-group">
                                    <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here">
                                    <button type="submit">
                                        <i class="fa fa-paper-plane"></i>
                                    </button>  
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2019. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>