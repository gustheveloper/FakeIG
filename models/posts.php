<?php
/**
 *
 */
 include 'conexoes.php';
class post extends conexao
{

  function criarPost($image,$descricao)
  {
    $db = parent::conectar();
    $query = $db->prepare ("INSERT INTO posts (img, descricao) values (?,?)");
    $query->execute($image,$descricao);
  }
}


 ?>
