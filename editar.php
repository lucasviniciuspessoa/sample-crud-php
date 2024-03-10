<?php
require 'config.php';
$info = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    $info = $sql->fetch(PDO::FETCH_ASSOC);
  } else {
    header("Location: index.php");
    exit();
  }
} else {
  header("Location: index.php");
  exit();
}

?>
<h1>Editar Usuário: </h1>
<form action="editar_action.php" method="POST">
  <input type="hidden" name="id" value="<?= $info['id']; ?>" />

  <div>
    <label for="#">Nome :</label>
    <input type="text" name="nome" value="<?= $info['nome']; ?>">
  </div>

  <div>
    <label for="email">Email :</label>
    <input type="text" name="email" value="<?= $info['email']; ?>">

  </div>


  <button type="submit">Salvar</button>

</form>