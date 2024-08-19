<?php
include('config.php');
switch (@$_REQUEST['acao']) {
  case 'cadastrar':

    $sql = "INSERT INTO cadastro
    (nome,data_nasc,email,telefone,senha,identidade,sexo) 
    VALUES 
    ('" . $_POST["nome"] . "',
    '" . $_POST["data_nasc"] . "',
    '" . $_POST["email"] . "',
    '" . $_POST["telefone"] . "',
    '" . $_POST["senha"] . "',
    
    '" . $_POST["identidade"] . "',
        '" . $_POST["sexo"] . "'
)";

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('cadastro concluido com sucesso');</script>";
      print "<script>location.href='criar.php';</script>";
    } else {
      print "<sBcript>alert('Nao foi possivel cadastrar');</sBcript>";
      print "<script>location.href='criar.php';</script>";
    }




    break;

 

   

  
}
