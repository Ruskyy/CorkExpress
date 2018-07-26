<!DOCTYPE html>
<?php
require_once 'functions/functions.php';
session_start();
validar();
?>
<html lang="en">
<head>
   <!-- Required meta tags-->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="au theme template">
   <meta name="author" content="Hau Nguyen">
   <meta name="keywords" content="au theme template">

   <!-- Title Page-->
   <title>Dashboard</title>

   <!-- Fontfaces CSS-->
   <link href="css/font-face.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
   <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

   <!-- Bootstrap CSS-->
   <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

   <!-- Vendor CSS-->
   <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
   <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
   <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
   <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
   <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
   <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

   <!-- Main CSS-->
   <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
   <div class="page-wrapper">
       <!-- HEADER MOBILE-->
       <header class="header-mobile d-block d-lg-none">
           <div class="header-mobile__bar">
               <div class="container-fluid">
                   <div class="header-mobile-inner">
                       <a class="logo" href="index.php">
                         <img src="assets/img/logo1.png"  style="height:70px !important;" alt="CoolAdmin">

                       </a>
                       <button class="hamburger hamburger--slider" type="button">
                           <span class="hamburger-box">
                               <span class="hamburger-inner"></span>
                           </span>
                       </button>
                   </div>
               </div>
           </div>
           <nav class="navbar-mobile">
               <div class="container-fluid">
                   <ul class="navbar-mobile__list list-unstyled">
                       <li class="has-sub">
                           <a class="js-arrow" href="index.php">
                               <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                       </li>
                       <li>
                           <a href="chart.html">
                               <i class="fas fa-chart-bar"></i>Charts</a>
                       </li>
                       <li>
                           <a href="table.html">
                               <i class="fas fa-table"></i>Tables</a>
                       </li>
                       <li>
                           <a href="form.php">
                               <i class="far fa-check-square"></i>Forms</a>
                       </li>
                       <li class="has-sub">
                           <a class="js-arrow" href="#">
                               <i class="fas fa-desktop"></i>UI Elements</a>
                           <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                               <li>
                                   <a href="button.html">Button</a>
                               </li>
                               <li>
                                   <a href="badge.html">Badges</a>
                               </li>
                               <li>
                                   <a href="tab.html">Tabs</a>
                               </li>
                               <li>
                                   <a href="card.html">Cards</a>
                               </li>
                               <li>
                                   <a href="alert.html">Alerts</a>
                               </li>
                               <li>
                                   <a href="progress-bar.html">Progress Bars</a>
                               </li>
                               <li>
                                   <a href="modal.html">Modals</a>
                               </li>
                               <li>
                                   <a href="switch.html">Switchs</a>
                               </li>
                               <li>
                                   <a href="grid.html">Grids</a>
                               </li>
                               <li>
                                   <a href="fontawesome.html">Fontawesome Icon</a>
                               </li>
                               <li>
                                   <a href="typo.html">Typography</a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </div>
           </nav>
       </header>
       <!-- END HEADER MOBILE-->

       <!-- MENU SIDEBAR-->
       <aside class="menu-sidebar d-none d-lg-block">
           <div class="logo">
               <a href="#">
                   <img src="assets/img/logo3.png"  style="height:75px !important;" alt="CoolAdmin">
               </a>
           </div>
           <div class="menu-sidebar__content js-scrollbar1">
               <nav class="navbar-sidebar">
                   <ul class="list-unstyled navbar__list">
                       <li class="active has-sub">
                           <a class="js-arrow" href="index.php">
                               <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                       </li>
                       <li>
                           <a href="chart.html">
                               <i class="fas fa-chart-bar"></i>Charts</a>
                       </li>
                       <li>
                           <a href="table.html">
                               <i class="fas fa-table"></i>Tables</a>
                       </li>
                       <li>
                           <a href="form.php">
                               <i class="far fa-check-square"></i>Forms</a>
                       </li>

                       <li class="has-sub">
                           <a class="js-arrow" href="#">
                               <i class="fas fa-desktop"></i>UI Elements</a>
                           <ul class="list-unstyled navbar__sub-list js-sub-list">
                               <li>
                                   <a href="button.html">Button</a>
                               </li>
                               <li>
                                   <a href="badge.html">Badges</a>
                               </li>
                               <li>
                                   <a href="tab.html">Tabs</a>
                               </li>
                               <li>
                                   <a href="card.html">Cards</a>
                               </li>
                               <li>
                                   <a href="alert.html">Alerts</a>
                               </li>
                               <li>
                                   <a href="progress-bar.html">Progress Bars</a>
                               </li>
                               <li>
                                   <a href="modal.html">Modals</a>
                               </li>
                               <li>
                                   <a href="switch.html">Switchs</a>
                               </li>
                               <li>
                                   <a href="grid.html">Grids</a>
                               </li>
                               <li>
                                   <a href="fontawesome.html">Fontawesome Icon</a>
                               </li>
                               <li>
                                   <a href="typo.html">Typography</a>
                               </li>
                           </ul>
                       </li>
                   </ul>
               </nav>
           </div>
       </aside>
       <!-- END MENU SIDEBAR-->

       <!-- PAGE CONTAINER-->
       <div class="page-container">
           <!-- HEADER DESKTOP-->
           <header class="header-desktop">
               <div class="section__content section__content--p30">
                   <div class="container-fluid">
                       <div class="header-wrap">
                           <div class="header-button">

                               <div class="account-wrap">
                                   <div class="account-item clearfix js-item-menu">
                                       <div class="image">
                                           <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                       </div>
                                       <div class="content">
                                           <a class="js-acc-btn" href="#">john doe</a>
                                       </div>
                                       <div class="account-dropdown js-dropdown">
                                           <div class="info clearfix">
                                               <div class="image">
                                                   <a href="#">
                                                       <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                   </a>
                                               </div>
                                               <div class="content">
                                                   <h5 class="name">
                                                       <a href="#">john doe</a>
                                                   </h5>
                                                   <span class="email">johndoe@example.com</span>
                                               </div>
                                           </div>
                                           <div class="account-dropdown__body">
                                               <div class="account-dropdown__item">
                                                   <a href="#">
                                                       <i class="zmdi zmdi-account"></i>Account</a>
                                               </div>
                                               <div class="account-dropdown__item">
                                                   <a href="#">
                                                       <i class="zmdi zmdi-settings"></i>Setting</a>
                                               </div>
                                               <div class="account-dropdown__item">
                                                   <a href="#">
                                                       <i class="zmdi zmdi-money-box"></i>Billing</a>
                                               </div>
                                           </div>
                                           <div class="account-dropdown__footer">
                                               <a href="functions/fecharsessao.php">
                                                   <i class="zmdi zmdi-power"></i>Logout</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </header>
           <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          <div class="col-lg-12">
                            <form class="" action="index.php" method="post">


                                <div class="card">
                                  <div class="card-header">
                                    REGISTO
                                  </div>
                                  <div class="card-body card-block">
                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="tipo">Tipo: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <select class="form-control" name="tipo">
                                          <option value="2">Funcionário</option>
                                          <option value="1">Administrador</option>
                                        </select>
                                      </div>
                                    </div>


                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="user" class="form-control-label">Username: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="text" name="user" value="" class="form-control" placeholder="User Name"Required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="pass" class="form-control-label">Password: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="password" name="pass" value="" class="form-control" placeholder="*******"Required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="email" class="form-control-label">E-Mail: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="email" name="email" value="" class="form-control" placeholder="abc@abc.com" Required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="nome" class="form-control-label">Nome: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="text" name="nome" value="" class="form-control" placeholder="Nome"Required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="morada" class="form-control-label">Morada: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <textarea name="morada" rows="9" placeholder="Rua _____" class="form-control"Required></textarea>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="nacio">Nacionalidade</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <select class="form-control" name="nacio">
                                          <option value="1">Portuguesa</option>
                                          <option value="2"></option>
                                          <option value="3"></option>
                                          <option value="4"></option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="natur" class="form-control-label">Naturalidade</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <select class="form-control" name="natur">
                                          <option value="1">AX 2840</option>
                                          <option value="2">Lisboa</option>
                                          <option value="3">Barreiro</option>
                                          <option value="4">Porto</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="bi">Numero CC: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="bi" min="10000000" max="99999999" class="form-control" required>
                                      </div>
                                    </div>
                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="nif">NIF: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="nif" min="100000000" max="999999999" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="nib" class="form-control-label" >NIB: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="nib" min="100000000000000000000" max="999999999999999999999" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="niss" class="form-control-label">Nº Segurança Social: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="niss" min="10000000000" max="99999999999" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="contacto" class="form-control-label">TELEMOVEL</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="contacto" min="100000000" max="999999999" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col col-md-3">
                                        <label for="salario">SALÁRIO BASE: </label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <input type="number" name="salario" min="1" step="any" value="" class="form-control" required>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col-12 col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-lg  btn-block">SUBMETER</button>
                                      </div>
                                    </div>

                                  </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
