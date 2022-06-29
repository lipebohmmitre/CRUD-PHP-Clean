<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo":
                        include("novo-usuario.php");
                    break;
                    case "listar":
                        include("listar-usuario.php");
                    break;
                    case "salvar":
                      include("salvar-usuario.php");
                  break;
                  case "editar":
                    include("editar-usuario.php");
                  break;
                case "excluir":
                  include("excluir-usuario.php");
                break;
                    default:
                        print "Bem Vindo";
                }

            ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
</body>

</html>