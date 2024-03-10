<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($nome && $email) {
  $pdo->query("SELECT * FROM usuarios");

  $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':email', $email);

  $sql->execute();

  header("Location: index.php");
  exit();
} else {
  header("Location: adicionar.php");
  exit();
}
