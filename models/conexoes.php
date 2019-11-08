<?php
/**
 *
 */
class conexao
{
  private $host = 'mysql:host=localhost;dbname=fakeig;port=3307';
  private $user = 'root';
  private $pass = '';

  protected function conectar()
  {
    return new PDO($this->host, $this->user, $this->pass);
  }

}


 ?>
