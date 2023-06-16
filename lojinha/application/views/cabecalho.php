<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Home</title>
    <!-- Font awesome -->
    <link href="/lojinha/public/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="/lojinha/public/css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="/lojinha/public/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="/lojinha/public/css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="/lojinha/public/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="/lojinha/public/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="/lojinha/public/css/theme-color/red-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Main style sheet -->
    <link href="/lojinha/public/css/style.css" rel="stylesheet">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div> 
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>00-62-658-658</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li class="hidden-xs"><a href="/lojinha/index.php/carrinho/cesta">Carrinho(<?php echo $this->cart->total_items(); ?>)</a></li>
                  <?php if($this->session->has_userdata('nome') == false ){ ?>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Login</a></li>
				          <?php } else { ?>
                  <li> Seja bem vindo <?php echo $this->session->userdata('nome'); ?> <a href="/lojinha/index.php/Login/deslogar">Deslogar [X]</a></li>
                <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="/lojinha/index.php/inicial/index">
                  <span class="fa fa-shopping-cart"></span>
                  <p>petry<strong>Shop</strong> <span>Faça parte do futuro aqui!</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="/lojinha/public/img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               
              <!-- search box -->
              <div class="aa-search-box">
                <form action="/lojinha/index.php/Inicial/busca" method="POST">
                  <input type="text" name="palavra" id="" placeholder="Pesquise aqui        ex:'Iphone' ">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="/lojinha/index.php/inicial/index">Home</a></li>
              <li><a href="/lojinha/index.php/Inicial/categoria/celulares">Celulares</a></li>
              <li><a href="/lojinha/index.php/Inicial/categoria/computadores">Computadores</a></li>
              <li><a href="/lojinha/index.php/Inicial/categoria/fones">Fones</a></li>
              <li><a href="/lojinha/index.php/Inicial/categoria/cameras">Câmeras</a></li>
              <li><a href="/lojinha/index.php/Inicial/categoria/relogios">Relógios</a></li>            
              <li><a href="/lojinha/index.php/contato/index">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>