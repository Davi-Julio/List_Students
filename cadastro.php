<?php

include_once "templates/header.php";

?>

<div class="container-form2">
  <label>Faça Seu Cadastro de Aluno</label>
  <form class="form2" action="" method="get">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input required name="nameCadastro" type="text" class="form-control" id="formGroupExampleInput"
        placeholder="Digite Seu Nome">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Email:</label>
      <input required name="emailCadastro" type="text" class="form-control" id="formGroupExampleInput2"
        placeholder="Digite Seu Email">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Contact:</label>
      <input required name="contatoCadastro" type="number" class="form-control" id="formGroupExampleInput"
        placeholder="Digite Seu Número de Contato">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Password:</label>
      <input required name="passwordCadastro" type="password" class="form-control" id="formGroupExampleInput2"
        placeholder="Crie Uma Senha">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Confirm Password:</label>
      <input required name="ConfirmPasswordCadastro" type="password" class="form-control" id="formGroupExampleInput2"
        placeholder="Confirme Sua Senha">
    </div>
    <button id="btn2" type="submit" name="cadastro" class="btn btn-primary">Cadastrar</button>
  </form>
  <!--form2-->

</div>
<!--container form2 -->