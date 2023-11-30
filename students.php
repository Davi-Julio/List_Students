<?php

include_once "templates/header.php";

?>

<table id="table" class="table table-striped">
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>CONTACT</th>
  </tr>

  <?php

foreach($resultd4 as $value){
  ?>
  <tr>
    <td><?=$value['id']?></td>
    <td><?=$value['name']?></td>
    <td><?=$value['email']?></td>
    <td><?=$value['contact']?></td>
    <td>
      <a href="?deletar=<?=$value['id']?>"><img width="30vw" src=" <?=$BASE_URL?>/Icons/excluir-48.png" alt=""></a>
      <a href="editar.php?id=<?=$value['id']?>"><img width="30vw" src="<?= $BASE_URL ?>/Icons/editar.png" alt=""></a>
    </td>
  </tr>
  <?php
}

?>
</table>