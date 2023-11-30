<?php

include_once "Model/config.php";


//Validação BackEnd para conferir se nome e senha do aluno existem no banco de dados

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  $Name = $_POST['Name'];
  $Password = $_POST['Password'];

  $sql = "SELECT * FROM students WHERE name = '$Name' AND password = '$Password'";
  $result = $mysqli->query($sql);

  if ($result->num_rows > 0) {
    header("Location: index.php");
  } else {
    echo 'Usuario Não cadastrado!';
  }
};


// Validação BackEnd para cadastrar alunos No sistema e verificar se nome e demais informações já existem no banco de dados


if (isset($_GET['cadastro'])) {
  $NameCadastro = $_GET['nameCadastro'];
  $EmailCadastro = $_GET['emailCadastro'];
  $ContatoCadastro = $_GET['contatoCadastro'];
  $PasswordCadastro = $_GET['passwordCadastro'];
  $ConfirmPasswordCadastro = $_GET['ConfirmPasswordCadastro'];

  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $NameCadastro = $_GET['nameCadastro'];
    $EmailCadastro = $_GET['emailCadastro'];
    $ContatoCadastro = $_GET['contatoCadastro'];
    $PasswordCadastro = $_GET['passwordCadastro'];
    $ConfirmPasswordCadastro = $_GET['ConfirmPasswordCadastro'];

    // validação de usuarios

    $sql = "SELECT * FROM students WHERE name = '$NameCadastro' OR email = '$EmailCadastro' OR contact = '$ConfirmPasswordCadastro' OR password = '$PasswordCadastro' OR confirmpassword  = '$ConfirmPasswordCadastro'";
    $result2 = $mysqli->query($sql);

    if ($result2->num_rows > 0) {
      echo 'Usuario Cadastrado';
    } else if($PasswordCadastro === $ConfirmPasswordCadastro) {
      // Validação Senhas
      $sqlCadastro = "INSERT INTO students (name, email, contact, password, confirmpassword) VALUES ('$NameCadastro', '$EmailCadastro', '$ContatoCadastro', '$PasswordCadastro', '$ConfirmPasswordCadastro')";
      $resultd3 = $mysqli->query($sqlCadastro);

      // Validação de cadastrao dos usuarios
      header("Location: sucess_cadastro.php");
    }else{
      echo 'Senhas diferentes';
    }
  }
}

// Exibir Alunos Na View

$sql = "SELECT * FROM students";
$resultd4 = $mysqli->query($sql);
$resultd4 -> fetch_all(MYSQLI_ASSOC);


// Excluir Alunos

if(isset($_GET['deletar'])){
  $id = (int) $_GET['deletar'];
  $sql = "DELETE FROM students WHERE id = '$id'";
  $result = $mysqli->query($sql);
}