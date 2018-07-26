<?php
function login($username,$password){

  if(empty($username) || empty($password)){
    echo 'Comé wi, preenche esses mambos!';
  }else {
    include 'connections/conn.php';
    $qlogin = mysqli_query($conn,"SELECT func_user, func_pass, func_tipo, func_id
       FROM funcionario
       WHERE func_user = '$username' AND func_pass = '$password' AND func_id = 1");
    $alogin = mysqli_fetch_array($qlogin);

    if(!$alogin){
      echo 'Erro: Wrong Input';
    }
    else{
      session_start();
      $_SESSION["id"] = $alogin["func_id"];
      $_SESSION["tipo"] = $alogin["func_tipo"];
      $_SESSION["username"] = $alogin["func_user"];

      echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    }
    include 'connections/deconn.php';
  }
}
function validar(){
  if(!$_SESSION["id"]){
    echo "<meta http-equiv='refresh' content='0; URL=login.php'>";
  }
}
function validarMain(){
  if(!$_SESSION["id"]){
    echo "<meta http-equiv='refresh' content='0; URL=login.php'>";
  }
}
 ?>
