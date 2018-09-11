 <!DOCTYPE html>
<?php
require_once '../functions/functions.php';
session_start();
validaruser();
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

     <!--FAVICON-->
     <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../apple-touch-icon-57x57.png" />
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../apple-touch-icon-114x114.png" />
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../apple-touch-icon-72x72.png" />
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../apple-touch-icon-144x144.png" />
     <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../apple-touch-icon-60x60.png" />
     <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../apple-touch-icon-120x120.png" />
     <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../apple-touch-icon-76x76.png" />
     <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../apple-touch-icon-152x152.png" />
     <link rel="icon" type="image/png" href="../favicon-196x196.png" sizes="196x196" />
     <link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
     <link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32" />
     <link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16" />
     <link rel="icon" type="image/png" href="../favicon-128.png" sizes="128x128" />
     <meta name="application-name" content="&nbsp;"/>
     <meta name="msapplication-TileColor" content="#FFFFFF" />
     <meta name="msapplication-TileImage" content="mstile-144x144.png" />
     <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
     <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
     <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
     <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />


     <!-- Fontfaces CSS-->
     <link href="../css/font-face.css" rel="stylesheet" media="all">
     <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

     <!-- Bootstrap CSS-->
     <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

     <!-- Vendor CSS-->
     <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
     <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
     <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
     <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
     <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

     <!-- Main CSS-->
     <link href="../css/theme.css" rel="stylesheet" media="all">

 </head>

 <body class="animsition">
     <div class="page-wrapper">
       <!-- HEADER MOBILE-->
       <header class="header-mobile d-block d-lg-none">
           <div class="header-mobile__bar">
               <div class="container-fluid">
                   <div class="header-mobile-inner">
                       <a class="logo" href="index.php">
                           <img src="../images/icon/logo.png" alt="CorkExpress" />
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
                           <a href="form.php">
                               <i class="fas fa-user-plus"></i>Adicionar Funcionario</a>
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
                   <img src="../images/icon/logo.png" alt="CorkExpress" />
               </a>
           </div>
           <div class="menu-sidebar__content js-scrollbar1">
               <nav class="navbar-sidebar">
                   <ul class="list-unstyled navbar__list">
                       <li class="active has-sub">
                           <a class="js-arrow" href="index.php">
                               <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                       </li>
                       <li class="">
                         <a href="form.php">
                             <i class="fas fa-user-cog"></i>Editar Funcionario</a>
                       </li>
                       <li>
                           <a href="historicopag.php">
                              <i class="fas fa-history"></i>Salarios Processados</a>
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

                             <?php
                             include '../connections/conn.php';
                             require_once '../functions/functions.php';
                             $funcid = $_SESSION['id'];
                             $query = mysqli_query($conn,"SELECT 'func_id',func_nome,func_email,func_nif,func_avatar_path FROM funcionario WHERE func_id = '$funcid'");
                             $empregado= mysqli_fetch_array($query);
                             $nif = $empregado['func_nif'];

                               echo '<div class="account-wrap">
                                   <div class="account-item clearfix js-item-menu">
                                       <div class="image">
                                           <img src="';
                                           if (is_null($empregado['func_avatar_path'])) {
                                             echo '../images/icon/avatar.jpg';
                                           }else {
                                             echo '../'.$empregado['func_avatar_path'].'';
                                           }
                                           echo '" alt="avatar" />
                                       </div>
                                       <div class="content">
                                        <a class="js-acc-btn">'.$empregado['func_nome'].'</a>
                                       </div>
                                       <div class="account-dropdown js-dropdown">
                                           <div class="info clearfix">
                                               <div class="image">
                                                   <a href="#">
                                                       <img src="';
                                                       if (is_null($empregado['func_avatar_path'])) {
                                                         echo '../images/icon/avatar.jpg';
                                                       }else {
                                                         echo '../'.$empregado['func_avatar_path'].'';
                                                       }
                                                       echo '" alt="avatar" />
                                                   </a>
                                               </div>';
                                              ?>
                                               <div class="content">
                                                 <?php
                                                 echo '<h5 class="name">
                                                 <a>'.$empregado['func_nome'].'</a>
                                                 </h5>
                                                <span class="email">'.$empregado['func_email'].'</span>';
                                                  ?>
                                               </div>
                                           </div>
                                           <div class="account-dropdown__body">
                                             <?php
                                             require_once '../functions/functions.php';
                                             if ($_SESSION["tipo"] !=2) {
                                               echo '
                                               <div class="account-dropdown__item">
                                                   <a href="../index.php">
                                                       <i class="fas fa-tachometer-alt"></i></i>Admin Dashboard</a>
                                               </div>
                                               ';
                                             }

                                              ?>
                                           </div>
                                           <div class="account-dropdown__footer">
                                                <a href="../functions/fecharsessao.php">
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
                      <div class="alert alert-secondary alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <h2 class="title-1"></i>
                        <?php
                         echo ' 👋 Bem-Vindo '.$empregado['func_nome'].'';
                         ?></h2>
                      </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"><i class="fas fa-tachometer-alt"></i> Vista Geral</h2>
                                  </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php
                                                require_once '../connections/conn.php';
                                                $query = mysqli_query($conn,"SELECT ROUND(AVG(func_salario), 2)AS media FROM funcionario");
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
                                                require_once '../connections/conn.php';
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
                                <h2 class="title-1 m-b-25"><i class="fas fa-history"></i> Ultimos 10 salarios processados</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Data</th>
                                                <th>ID Pagamento</th>
                                                <th>Nome</th>
                                                <th class="text-right">Salario Liquido</th>
                                                <th class="text-right">Tipo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          include '../connections/conn.php';

                                          $query = mysqli_query($conn,"SELECT pag_date,pag_id,func_nome,pag_salarioliq,pag_nif,
                                            IF(pag_tipo = 1, 'Mensal',IF(pag_tipo=2,'Sub. Ferias',IF(pag_tipo=3,'Sub. Natal','Outro'))) as pag_tipopag
                                            FROM pagamentos inner join funcionario on pag_nif = funcionario.func_nif WHERE pag_nif=$nif ORDER BY pag_date,pag_id DESC LIMIT 10");
                                            $a = 1;
                                            while ($listafuncionarios = mysqli_fetch_array($query)) {
                                           ?>
                                            <tr>
                                                <td><?php echo $listafuncionarios["pag_date"] ?></td>
                                                <td><?php echo $listafuncionarios["pag_id"] ?></td>
                                                <td><?php echo $listafuncionarios["func_nome"] ?></td>
                                                <td><?php echo $listafuncionarios["pag_salarioliq"] ?></td>
                                                <td><?php echo $listafuncionarios["pag_tipopag"] ?></td>
                                            </tr>
                                            <?php
                                                $a = $a + 1;
                                                }
                                                include '../connections/conn.php';
                                             ?>
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">


                                    <p>Copyright © 2018 Nilton e Sérgio.</p>
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
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
