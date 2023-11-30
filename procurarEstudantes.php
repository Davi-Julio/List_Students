<?php

include_once "templates/header.php";

?>

<div class="container-form">
  <form class="form1" action="">
    <label>Pesquise O Nome dos Estudantes!</label>
    <div class="mb-3">
      <input required type="text" name="buscar" class="form-control" id="formGroupExampleInput"
        placeholder="Digite O Nome dos Estudantes">
    </div>
    <button id="btn2" type="submit" class="btn btn-primary">Pesquisar</button>
  </form>
  <!--form-->
</div>
<!--container form-->

<table id="table" class="table table-striped">

  <tr>
    <th>Nome</th>
    <th>Email</th>
    <th>Contact</th>
  </tr>

  <?php

if (!isset($_GET['buscar'])){
  ?>
  <tr>
    <td colspan="3">Digite algo para Pesquisar!</td>
  </tr>
  <?php
}else{
  $pesquisar = $mysqli->real_escape_string($_GET['buscar']);
  $sql_code = "SELECT * FROM students WHERE name LIKE '%$pesquisar%' OR email LIKE '%$pesquisar%' OR contact LIKE '%$pesquisar%'";
  $sql_query = $mysqli->query($sql_code) or die("ERRO CO CONSULTAR! " . $mysqli->error);

  if($sql_query->num_rows == 0){
    ?>
  <tr>
    <td colspan="3">Nenhum Resultado Encontrado!</td>
  </tr>
  <?php
  }else{
    while($dados = $sql_query->fetch_assoc()){
      ?>
  <tr>
    <td><?=$dados['name']?></td>
    <td><?=$dados['email']?></td>
    <td><?=$dados['contact']?></td>
  </tr>
  <?php

    }
  }
}

?>

</table>