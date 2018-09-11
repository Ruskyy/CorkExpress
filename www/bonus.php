<!DOCTYPE html>
<?php
require_once 'functions/functions.php';
session_start();
validar();
$mes = 0;
$escirs = 0;
$opc = 0;
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


                      <li class="has-sub">
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

                      <li class="active has-sub">
                          <a class="js-arrow" href="#">
                             <i class="fas fa-money-check-alt"></i></i>Gestão Salarios</a>
                          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="pagamentos.php">
                                    <i class="fas fa-hand-holding-usd"></i>Pagamentos</a>
                            </li>
                            <li>
                                <a href="bonus.php">
                                   <i class="fas fa-gift"></i>Bonus e Sub.</a>
                            </li>
                            <li>
                                <a href="historicopag.php">
                                   <i class="fas fa-history"></i>Historico</a>
                            </li>
                            <li>
                                <a href="confpagamentos.php">
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

                            <?php
                            include 'connections/conn.php';
                            require_once 'functions/functions.php';
                            $funcid = $_SESSION['id'];
                            $query = mysqli_query($conn,"SELECT 'func_id',func_nome,func_email,func_avatar_path FROM funcionario WHERE func_id = '$funcid'");
                            $empregado= mysqli_fetch_array($query);

                              echo '<div class="account-wrap">
                                  <div class="account-item clearfix js-item-menu">
                                      <div class="image">
                                          <img src="';
                                          if (is_null($empregado['func_avatar_path'])) {
                                            echo 'images/icon/avatar.jpg';
                                          }else {
                                            echo $empregado['func_avatar_path'];
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
                                                        echo 'images/icon/avatar.jpg';
                                                      }else {
                                                        echo $empregado['func_avatar_path'];
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
                  <div class="container">
                    <div class="row">
                      <div class="col-sm">
                        <h3 class="title-5 m-b-35">Lista Membros</h3>
                      </div>
                      <div class="col-sm" style="text-align:right;">

                        <form class="" action="" method="post">
                          <?php
                          echo '<select class="" name="mes">
                            <option>    </option>
                          ';
                          $queryturno = mysqli_query($conn,"SELECT mes_id, mes_nome FROM mes");

                          while ($listaturno = mysqli_fetch_array($queryturno)) {
                            echo '<option value="'.$listaturno["mes_id"].'">'.$listaturno["mes_nome"].'</option>';
                          }
                          echo '
                          </select>' ?>

                          <button type="submit" class="btn btn-success" name="button">Selecionar Mes</button>

                        </form>
                        <?php
                          if(ISSET($_POST["button"])){
                            $mes = $_POST["mes"];
                          }
                         ?>
                      </div>
                    </div>
                  </div>


                      <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>NIF</th>
                                                <th>NIB</th>
                                                <th>Salario</th>
                                                <th class="text-right">Sub. de Ferias</th>
                                                <th class="text-right">Sub. de Natal</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          echo date("Y-m-d");
                                          include 'connections/conn.php';
                                          $query = mysqli_query($conn,"SELECT func_id,func_nome,func_nif,func_nib,func_salario, IF(turno_nome=0, turno_nome, 'Sem Turno') as turno, func_idirs, func_idss, turno_perc
                                                                FROM funcionario as func
                                                                left join turno on turno_id = func_idturno
                                                                ");

                                          while (@$listafuncionarios = mysqli_fetch_array($query)) {

                                            echo '
                                            <form method="post">
                                            <tr><td>'.$listafuncionarios["func_nome"].'</td>
                                            <td>'.$listafuncionarios["func_nif"].' <input type="hidden" name="nif" value="'.$listafuncionarios["func_nif"].'"> </td>
                                            <td>'.$listafuncionarios["func_nib"].'</td>
                                            <td>'.$listafuncionarios["func_salario"].' € <input type="hidden" name="salariobruto" value="'.$listafuncionarios["func_salario"].'"> </td>
                                            ';
                                            /*Selector IRS*/
                                            /*echo $listafuncionarios["func_salario"];*/
                                            $queryirs1 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoirs WHERE irs_id = 1"));
                                            $queryirs2 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoirs WHERE irs_id = 2"));
                                            $queryirs3 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoirs WHERE irs_id = 3"));
                                            $queryirs4 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoirs WHERE irs_id = 4"));
                                            if($listafuncionarios["func_salario"]<=0){
                                              echo "Fora da Escala";
                                            }
                                            else if($listafuncionarios["func_salario"]<$queryirs1["irs_valormax"] ){
                                              echo '<input type="hidden" name="escirs" value=0.'.$queryirs1["irs_desc"].'>';
                                            }
                                            else if($listafuncionarios["func_salario"]>=$queryirs2["irs_valormin"] && $listafuncionarios["func_salario"]<=$queryirs2["irs_valormax"] ){
                                              echo '<input type="hidden" name="escirs" value=0.'.$queryirs2["irs_desc"].'>';
                                            }

                                            else if($listafuncionarios["func_salario"]>$queryirs3["irs_valormin"] && $listafuncionarios["func_salario"]<$queryirs3["irs_valormax"] ){
                                              echo '<input type="hidden" name="escirs" value=0.'.$queryirs3["irs_desc"].'>';
                                            }else {
                                              echo '<input type="hidden" name="escirs" value=0.'.$queryirs4["irs_desc"].'>';
                                            }
                                          /*Selector SS*/
                                            /*echo $listafuncionarios["func_salario"];*/
                                            $queryss1 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoss WHERE ss_id = 1"));
                                            $queryss2 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoss WHERE ss_id = 2"));
                                            $queryss3 = mysqli_fetch_array(mysqli_query($conn,"SELECT * from escalaoss WHERE ss_id = 3"));
                                            if($listafuncionarios["func_salario"]<=0){
                                            }
                                            else if($listafuncionarios["func_salario"]<$queryss1["ss_valormax"] ){
                                              echo '<input type="hidden" name="escss" value=0.'.$queryss1["ss_desc"].'>';
                                            }
                                            else if($listafuncionarios["func_salario"]>=$queryss2["ss_valormin"] && $listafuncionarios["func_salario"]<=$queryss2["ss_valormax"] ){
                                              echo '<input type="hidden" name="escss" value=0.'.$queryss2["ss_desc"].'>';
                                            }
                                            else{
                                              echo '<input type="hidden" name="escss" value=0.'.$queryss3["ss_desc"].'>';
                                            }

                                            echo '
                                            <input type="hidden" name="dias" value="22">
                                            <input type="hidden" name="tipo" value=2>

                                            <td class="text-right"><button type="submit" name="ferias" class="btn btn-success" value>Sub. Ferias</button></td>
                                            <td class="text-right"><button type="submit" name="natal" class="btn btn-success" value>Sub. Natal</button></td>

                                            </form>';
                                            
                                          }


                                          if(ISSET($_POST["ferias"])){
                                            $tipo = 2;

                                            $date = date("Y-m-d");
                                            $salario = $_POST["salariobruto"];
                                            $segs = $_POST['escss'];
                                            $imprs = $_POST['escirs'];
                                            $dias = $_POST['dias'];

                                            $qferias = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(pag_id) as total
                                            FROM pagamentos WHERE pag_nif=".$_POST['nif']." AND pag_tipo=2 AND YEAR(pag_date)=YEAR(CURDATE())"));

                                            if($qferias["total"] == 0){
                                              $opc = 1;
                                            }
                                            else {
                                              echo "Ja recebeu subsidio de ferias este ano";
                                              $opc = 0;
                                            }
                                          }

                                          if(ISSET($_POST["natal"])){


                                            $date = date("Y-m-d");
                                            $salario = $_POST["salariobruto"];
                                            $segs = $_POST['escss'];
                                            $imprs = $_POST['escirs'];
                                            $dias = $_POST['dias'];

                                            $elmes = mysqli_query($conn,"SELECT MONTH(CURDATE())");
                                            if($elmes == 11){
                                              $tipo = 3;
                                              $qnatal = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(pag_id) as total FROM pagamentos WHERE pag_nif = ".$_POST['nif']." AND pag_tipo = 3 AND YEAR(pag_date) = YEAR(CURDATE())"));
                                              if($qnatal["total"] == 0){
                                                $opc = 2;

                                              }
                                              else {
                                                echo "Ja recebeu o Sub de Natal Este ano";
                                                $opc = 0;
                                              }
                                            }
                                            else {
                                              echo "Ainda nao chegou novembro";
                                              $opc = 0;
                                            }
                                          }



                                          if($opc == 1){
                                            $descss = $salario * $segs;
                                            $descirs = $salario * $imprs;
                                            $salliq = $salario - ($descss + $descirs);
                                            $salario_final = $salliq;
                                            echo 'Kappa 2';
                                             mysqli_query($conn,"INSERT INTO pagamentos(pag_nif, pag_date, pag_dias, pag_salariobruto, pag_descss, pag_descirs, pag_salarioliq, pag_tipo, pag_mes)
                                               VALUES('$_POST[nif]',CURDATE(),'$_POST[dias]','$_POST[salariobruto]','$descss','$descirs','$salario_final','$tipo', 0)");
                                            echo "<meta http-equiv='refresh' content='0; URL=bonus.php'>";
                                          }
                                          elseif ($opc == 2) {
                                            $diastrab = mysqli_query($conn,"SELECT SUM(pag_dias) FROM pagamentos inner join funcionario WHERE pag_nif = func_nif");
                                            $salario = ($salario/365) * $diastrab;
                                            $descss = $salario * $segs;
                                            $descirs = $salario * $imprs;
                                            $salliq = $salario - ($descss + $descirs);
                                            $salario_final = $salliq;
                                            mysqli_query($conn,"INSERT INTO pagamentos(pag_nif, pag_date, pag_dias, pag_salariobruto, pag_descss, pag_descirs, pag_salarioliq, pag_tipo, pag_mes)
                                              VALUES('$_POST[nif]',CURDATE(),0,'$_POST[salariobruto]','$descss','$descirs','$salario_final',$tipo', 11)");
                                           echo "<meta http-equiv='refresh' content='0; URL=bonus.php'>";
                                          }
                                          else {

                                          }
                                          include 'connections/deconn.php';

                                          ?>
                                        </tbody>
                                    </table>
                                    <div class="container-fluid" style="margin-top:1rem;">
                                      <div class="row" style="">
                                        <div class="col-sm">

                                        </div>
                                      </div>
                                    </div>

                                </div>
                                <!-- END DATA TABLE-->
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
