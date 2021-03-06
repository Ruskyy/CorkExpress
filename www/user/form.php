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
    <title>Editar Ficha</title>

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
                      <li class="has-sub">
                          <a class="js-arrow" href="index.php">
                              <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                      </li>
                      <li class="active">
                        <a href="form.php">
                            <i class="fas fa-user-cog"></i>Editar Dados Pessoais</a>
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
                        <div class="row">
                          <div class="col-lg-12">
                                <div class="card">
                                  <div class="card-header">
                                    EDITAR DADOS PESSOAIS
                                  </div>
                                  <div class="card-body card-block">
                                    <?php
                                    include '../connections/conn.php';
                                    $query = mysqli_query($conn,"SELECT * FROM funcionario  WHERE func_id='$funcid'");
                                    while ($listafuncionarios = mysqli_fetch_array($query)) {
                                      echo '
                                            <form method="post">
                                            <div class="modal-body">
                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="tipo">Tipo: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <select class="form-control" name="tipo" disabled>';
                                                if ($listafuncionarios['func_tipo'] != 1) {
                                                  echo '<option value="1">Administrador</option>
                                                        <option value="2" selected>Funcionário</option>';
                                                }else {
                                                  echo '<option value="1" selected >Administrador</option>
                                                        <option value="2">Funcionário</option>';
                                                }
                                                echo '</select>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="user" class="form-control-label">Username: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="text" name="user" class="form-control" value="'.$listafuncionarios['func_user'].'" readonly>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="pass" class="form-control-label">Password: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="password" name="pass" value="" class="form-control" placeholder="Definir nova password (opcional)">
                                              </div>
                                            </div>

                                            <hr>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="email" class="form-control-label">E-Mail: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="email" name="email" class="form-control" value="'.$listafuncionarios['func_email'].'" Required>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="nome" class="form-control-label">Nome: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="text" name="nome" class="form-control" value="'.$listafuncionarios['func_nome'].'">
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="morada" class="form-control-label">Morada: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="text" name="morada" class="form-control" value="'.$listafuncionarios['func_morada'].'">
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="nacio">Nacionalidade</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <select class="form-control" name="nacio">';
                                                $query2 = mysqli_query($conn,"SELECT * FROM nacionalidade");
                                                while ($nacionalidade = mysqli_fetch_array($query2)) {
                                                  if ($nacionalidade['paisId'] != $listafuncionarios['func_idnacio']) {
                                                  echo '<option value="'.$nacionalidade['paisId'].'">'.$nacionalidade['paisNome'].'</option>';
                                                  }else{
                                                  echo '<option value="'.$nacionalidade['paisId'].'" selected>'.$nacionalidade['paisNome'].'</option>';
                                                }
                                                }
                                                echo '</select>
                                              </div>
                                            </div>
                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="natur" class="form-control-label">Naturalidade</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <select class="form-control" name="natur">
                                                  <option value="" selected>Selecione</option>';
                                                  $query3 = mysqli_query($conn,"SELECT * FROM naturalidade");
                                                  while ($naturalidade = mysqli_fetch_array($query3)) {
                                                    if ($naturalidade['idNatur'] != $listafuncionarios['func_idnatur']) {
                                                      echo '<option value="'.$naturalidade['idNatur'].'">'.$naturalidade['nomeNatur'].'</option>';
                                                    }else{
                                                      echo '<option value="'.$naturalidade['idNatur'].'" selected>'.$naturalidade['nomeNatur'].'</option>';
                                                  }
                                                  }
                                                echo '</select>
                                              </div>
                                            </div>
                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="bi">Numero CC: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="number"  value="'.$listafuncionarios['func_bi'].'" name="bi" class="form-control" required>
                                              </div>
                                            </div>
                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="nif">NIF: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="number" name="nif"  value="'.$listafuncionarios['func_nif'].'" class="form-control" required>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="nib" class="form-control-label" >NIB: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="number" name="nib"  value="'.$listafuncionarios['func_nib'].'" class="form-control" required>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="niss" class="form-control-label">Nº Segurança Social: </label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="number" name="niss"  value="'.$listafuncionarios['func_niss'].'" class="form-control" required>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="contacto" class="form-control-label">Telemovel/Telefone:</label>
                                              </div>
                                              <div class="col-12 col-md-9">
                                                <input type="number"  value="'.$listafuncionarios['func_contacto'].'" name="contacto" class="form-control" required>
                                              </div>
                                            </div>

                                            <div class="row form-group">
                                              <div class="col col-md-3">
                                                <label for="salario">Salário Base:</label>
                                              </div>
                                              <div class="input-group col-12 col-md-9">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text">€</span>
                                                </div>
                                                <input type="number" min="0" max="100000" maxlength="6" name="salario" class="form-control"  value="'.$listafuncionarios['func_salario'].'" aria-label="Valor">
                                              </div>
                                            </div>
                                            <br>
                                          </div>
                                            <div class="modal-footer">
                                              <button type="submit" name="editar" class="btn btn-success">Submeter Alterações</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      </form>
                                      <!-- end modal scroll -->
                                  ';
                                  if(ISSET($_POST["editar"])){
                                    if(empty($_POST["pass"])){
                                      mysqli_query($conn, "UPDATE funcionario
                                         SET
                                         func_user='$_POST[user]',
                                         func_email='$_POST[email]',
                                         func_nome='$_POST[nome]',
                                         func_morada='$_POST[morada]',
                                         func_idnacio='$_POST[nacio]',
                                         func_idnatur='$_POST[natur]',
                                         func_bi='$_POST[bi]',
                                         func_nif='$_POST[nif]',
                                         func_nib='$_POST[nib]',
                                         func_niss='$_POST[niss]',
                                         func_contacto='$_POST[contacto]',
                                         func_salario='$_POST[salario]'

                                        WHERE func_id=$funcid ");
                                    }else {
                                      mysqli_query($conn, "UPDATE funcionario
                                         SET
                                         func_user='$_POST[user]',
                                         func_pass=$_POST[pass],
                                         func_email='$_POST[email]',
                                         func_nome='$_POST[nome]',
                                         func_morada='$_POST[morada]',
                                         func_idnacio='$_POST[nacio]',
                                         func_idnatur='$_POST[natur]',
                                         func_bi='$_POST[bi]',
                                         func_nif='$_POST[nif]',
                                         func_nib='$_POST[nib]',
                                         func_niss='$_POST[niss]',
                                         func_contacto='$_POST[contacto]',
                                         func_salario='$_POST[salario]'

                                        WHERE func_id=$funcid ");
                                    }


                                    include "connections/deconn.php";
                                    echo "<meta http-equiv='refresh' content='0; URL=form.php'>";
                                  }
                                  }

                                   ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
