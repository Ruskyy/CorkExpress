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
    <title>Lista Funcionarios</title>

    <!--FAVICON-->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
                              <li>
                                  <a href="chart.html">
                                      <i class="fas fa-chart-bar"></i>Charts</a>
                              </li>
                              <li>
                                  <a href="table.html">
                                      <i class="fas fa-table"></i>Tables</a>
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
                      <li class="has-sub">
                          <a class="js-arrow" href="index.php">
                              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                      </li>


                      <li class="active has-sub">
                          <a class="js-arrow" href="#">
                             <i class="fa fa-users-cog"></i>Gestão Funcionarios</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="lista.php">
                                    <i class="fas fa-list-ul"></i>Lista Funcionarios</a>
                           </li>
                            <li>
                                <a href="form.php">
                                   <i class="fas fa-user-plus"></i>Novo Funcionario</a>
                            </li>
                            <li>
                                <a href="lista.php">
                                    <i class="fas fa-user-cog"></i>Editar Funcionario</a>
                           </li>
                           <li>
                               <a href="lista.php">
                                   <i class="fas fa-user-minus"></i>Remover Funcionario</a>
                          </li>
                          </ul>
                      </li>

                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-calendar-alt"></i>Gestão Horario</a>
                              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="gestaoturnos.php">
                                        <i class="fas fa-user-clock "></i>Definir Turnos</a>
                                </li>
                                <li>
                                    <a href="confturnos.php">
                                       <i class="fas fa-cog "></i>Configurações</a>
                                </li>
                              </ul>
                      </li>

                      <li class="has-sub">
                          <a class="js-arrow" href="#">
                             <i class="fas fa-money-check-alt"></i></i>Gestão Salarios</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="pagamentos.php">
                                    <i class="fas fa-hand-holding-usd"></i>Pagamentos</a>
                            </li>
                            <li>
                                <a href="form.php">
                                   <i class="fas fa-gift"></i>Bonus e Sub.</a>
                            </li>
                            <li>
                                <a href="historicopag.php">
                                   <i class="fas fa-history"></i>Historico</a>
                            </li>
                            <li>
                                <a href="form.php">
                                   <i class="fas fa-cog"></i>Configurações</a>
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
                                        <?php
                                        include 'connections/conn.php';
                                        require_once 'functions/functions.php';
                                        $funcid = $_SESSION['id'];
                                        $query = mysqli_query($conn,"SELECT 'func_id',func_nome,func_email FROM funcionario WHERE func_id = '$funcid'");
                                        $empregado= mysqli_fetch_array($query);

                                          echo '<a class="js-acc-btn">'.$empregado['func_nome'].'</a>';
                                         ?>
                                      </div>
                                      <div class="account-dropdown js-dropdown">
                                          <div class="info clearfix">
                                              <div class="image">
                                                  <a href="#">
                                                      <img src="images/icon/avatar-01.jpg" alt="nilton fontes" />
                                                  </a>
                                              </div>
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
                                              <div class="account-dropdown__item">
                                                  <a href="#">
                                                      <i class="zmdi zmdi-account"></i>Conta</a>
                                              </div>
                                              <div class="account-dropdown__item">
                                                  <a href="#">
                                                      <i class="zmdi zmdi-money-box"></i>Gestão de Salarios</a>
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
                  <h3 class="title-5 m-b-35">Lista Membros</h3>
                      <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Email</th>
                                                <th>Morada</th>
                                                <th>Salario</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          include 'connections/conn.php';
                                          $query = mysqli_query($conn,"SELECT * FROM funcionario");
                                          while ($listafuncionarios = mysqli_fetch_array($query)) {
                                            echo '<tr><td>'.$listafuncionarios['func_nome'].'</td>
                                            <td>'.$listafuncionarios['func_email'].'</td>
                                            <td>'.$listafuncionarios['func_morada'].'</td>
                                            <td>'.$listafuncionarios['func_salario'].' €</td>
                                            <td>
                                              <div class="table-data-feature">
                                                  <button class="item" data-toggle="modal" data-target="#scrollmodal" title="Edit">
                                                      <i class="zmdi zmdi-edit"></i>
                                                  </button>
                                                  <button class="item" data-toggle="modal" data-target="#staticModal'.$listafuncionarios['func_id'].'" title="Delete">
                                                      <i class="zmdi zmdi-delete"></i>
                                                  </button>
                                              </div></td>
                                              ';
                                          }

                                          include 'connections/deconn.php';
                                          ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- modal scroll -->
    <div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="scrollmodalLabel">Editar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
            DADOS
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-success">Submeter Alterações</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal scroll -->

    <?php
    include 'connections/conn.php';
    $query = mysqli_query($conn,"SELECT func_id,func_nome FROM funcionario");
    while ($listafuncionarios = mysqli_fetch_array($query)) {
      echo '
    <!-- Remover user '.$listafuncionarios['func_id'].' -->
    <div class="modal fade" id="staticModal'.$listafuncionarios['func_id'].'" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true"
     data-backdrop="static">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticModalLabel">Remover</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Tem a certeza que deseja remover este funcionario ?
              <br><center><code>
              '.$listafuncionarios['func_id'].' - '.$listafuncionarios['func_nome'].'
              </code></center>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <form method="post">
            <input type="hidden" name="hiddenid" value ="'.$listafuncionarios['func_id'].'">
            <button type="submit" name="remover" class="btn btn-danger">Remover</button>
            </form>
          </div>
        </div>
      </div>
    </div>';
  }
  if(ISSET($_POST["remover"])){
    mysqli_query($conn, "DELETE FROM funcionario WHERE func_id=".$_POST['hiddenid']." ");
    include "connections/deconn.php";
    echo "<meta http-equiv='refresh' content='0; URL=lista.php'>";
  }
   ?>



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
