<?php

include 'models/posts.php';

class postController
{

  function acao($rotas)
  {
    switch ($rotas) {
      case 'posts':
        $this->viewPost();
        break;
      case 'formulario-post':
        $this->viewFormPost();
        break;
        case 'cadastrar-post':
        $this->cadastroPost();
          break;


    }

  }
  private function viewFormPost()
  {
    include 'views/newPost.php';
  }
  private function viewPost()
  {
    include 'views/posts.php';
  }
  private function cadastroPost()
  {
    $descric = $_POST['descricao'];
    $nomeArquivo = $_FILES['img'];
    $linkTemp = $_FILES['img']['tmp_name'];
    $caminhoSalvo = "/views/img/$nomeArquivo";

    move_upload_file($linkTemp, $caminhoSalvo);

    $post = new Post();
    $resultado = $post -> criarPost($caminhoSalvo,$descric);
    if ($resultado){
      header('location:/FakeIG/posts');
    }

  }
}


 ?>
