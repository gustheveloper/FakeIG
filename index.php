<?php
  $rotas = key($_GET)?key($_GET):'posts';
  switch ($rotas) {
    case 'posts':
    include 'controller/postController.php';
    $controller = new postController();
    $controller->acao($rotas);
      break;
      case 'formulario-post':
        include 'views/newPost.php';
        $controller = new postController();
        $controller->acao($rotas);
        break;
        case 'posts':
        // include 'views/posts.php';
          $controller = new postController();
          $controller->acao($rotas);
          break;
          case 'cadastrar-post':
          include 'views/newPost.php';
            $controller = new postController();
            $controller->acao($rotas);
            break;
    default:
      // code...
      break;
  }

 ?>
