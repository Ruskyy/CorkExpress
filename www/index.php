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
                           <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                           <a href="lista.php">
                               <i class="fas fa-list-ul"></i>Lista Funcionarios</a>
                       </li>
                       <li>
                           <a href="form.php">
                               <i class="fas fa-user-plus"></i>Adicionar Funcionario</a>
                       </li>
                       <li>
                           <a href="chart.html">
                               <i class="fas fa-chart-bar"></i>Charts</a>
                       </li>
                       <li>
                           <a href="table.html">
                               <i class="fas fa-table"></i>Tables</a>
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
                   <img src="images/icon/logo.png" alt="Cool Admin" />
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
                           <a href="lista.php">
                               <i class="fas fa-list-ul"></i>Lista Funcionarios</a>
                       </li>
                       <li>
                           <a href="form.php">
                              <i class="fas fa-user-plus"></i>Adicionar Funcionario</a>
                       </li>
                       <li>
                           <a href="chart.html">
                               <i class="fas fa-chart-bar"></i>Charts</a>
                       </li>
                       <li>
                           <a href="table.html">
                               <i class="fas fa-table"></i>Tables</a>
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
                                           <img src="images/icon/avatar-01.jpg" alt="nilton fontes" />
                                       </div>
                                       <div class="content">
                                           <a class="js-acc-btn" href="#">nilton fontes</a>
                                       </div>
                                       <div class="account-dropdown js-dropdown">
                                           <div class="info clearfix">
                                               <div class="image">
                                                   <a href="#">
                                                       <img src="images/icon/avatar-01.jpg" alt="nilton fontes" />
                                                   </a>
                                               </div>
                                               <div class="content">
                                                   <h5 class="name">
                                                       <a href="#">nilton fontes</a>
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
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Vista Geral</h2>
                                  </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                require_once 'connections/conn.php';
                                                $query = mysqli_query($conn,"SELECT func_id FROM funcionario");
                                                $entradas = mysqli_num_rows($query);
                                                echo "$entradas";
                                                ?></h2>
                                                <span>Colaboradores</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                              <i class="zmdi zmdi-trending-up"></i>
                                            </div>
                                            <div class="text">
                                                <h2> +1,38% <i class="zmdi zmdi-caret-up"></i></h2>
                                                <span>Ações</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                require_once 'connections/conn.php';
                                                $query = mysqli_query($conn,"SELECT avg(func_salario) AS media FROM funcionario");
                                                $resultado = mysqli_fetch_assoc($query);
                                                $media = $resultado['media'];
                                                echo "$media €";
                                                ?></h2>
                                                <span>Salário Médio</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                require_once 'connections/conn.php';
                                                $query = mysqli_query($conn,"SELECT sum(func_salario) AS soma FROM funcionario");
                                                $resultado = mysqli_fetch_assoc($query);
                                                $salarios = $resultado['soma'];
                                                echo "$salarios €";
                                                ?></h2>
                                                <span>Salários/mês</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Earnings By Items</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>ID Pagamento</th>
                                                <th>Nome</th>
                                                <th class="text-right">Valor</th>
                                                <th class="text-right">Salario Liquido</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2018-09-29 05:57</td>
                                                <td>100398</td>
                                                <td>Carl W Langer</td>
                                                <td class="text-right">$999.00</td>
                                                <td class="text-right">$999.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Top 8 Salarios </h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                  <?php
                                                  include 'connections/conn.php';
                                                  $query = mysqli_query($conn,"SELECT func_nome,func_salario FROM funcionario ORDER BY `funcionario`.`func_salario` DESC LIMIT 0, 8 ");
                                                  while ($toplista = mysqli_fetch_array($query)) {
                                                    echo '<tr>
                                                    <td>'.$toplista['func_nome'].'</td>
                                                    <td class="text-right">'.$toplista['func_salario'].' €</td></tr>';
                                                  }
                                                  include 'connections/deconn.php';
                                                  ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
