<?php

include_once "templates/header.php";

?>

<div class="container-form">
  <form class="form1" action="" method="post">
    <label>Faça Login Em Sua Conta de Estudante!</label>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input required type="text" name="Name" class="form-control" id="formGroupExampleInput"
        placeholder="Digite Seu Nome">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Password:</label>
      <input required type="password" name="Password" class="form-control" id="formGroupExampleInput2"
        placeholder="Digite Sua Senha">
    </div>
    <button id="btn1" type="submit" name="login" class="btn btn-danger">Login</button>
  </form>
  <!--form-->
  <p>Não Possui Conta? Faça Seu Cadastrado!</p>
</div>
<!--container form-->