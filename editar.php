<?php

include_once "templates/header.php";


if(isset($_GET['id'])){
  $id = $_GET['id'];

  $sql = "SELECT * FROM students WHERE id = '$id'";
  $resultd = $mysqli->query($sql);

  if($resultd->num_rows > 0){
    $row = $resultd->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $contact = $row['contact'];

    ?>

<div class="container-form2">
  <label>Edite seus dados de aluno</label>
  <form class="form2" action="" method="post">
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Name:</label>
      <input type="hidden" name="id" value="<?php echo $id; ?>">
      <input required name="nome" value="<?php echo $name ?>" type="text" class="form-control"
        id="formGroupExampleInput" placeholder="Digite Seu Nome">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Email:</label>
      <input required name="email" value="<?php echo $email ?>" type="text" class="form-control"
        id="formGroupExampleInput2" placeholder="Digite Seu Email">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Contact:</label>
      <input required name="contact" value="<?php echo $contact ?>" type="number" class="form-control"
        id="formGroupExampleInput" placeholder="Digite Seu Número de Contato">
    </div>
    <button id="btn2" type="submit" class="btn btn-primary">Editar</button>
  </form>
  <!--form2-->

</div>
<!--container form2 -->

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $novoNome = $_POST['nome'];
    $novoEmail = $_POST['email'];
    $novoContact = $_POST['contact'];

    $sql = "UPDATE students SET name = '$novoNome', email = '$novoEmail', contact ='$novoContact' WHERE id = $id";

    if ($mysqli->query($sql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
        header("Location: students.php");
    } else {
        echo "Erro ao atualizar o usuário: " . $conn->error;
    }
}

  }
}