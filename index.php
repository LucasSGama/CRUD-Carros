<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Carros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Marcas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=marca-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=marca-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
        <!-- ======================================================= -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Modelos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=modelo-listar">Listar</a></li>
            <li><a class="dropdown-item" href="?page=modelo-cadastrar">Cadastrar</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <?php
            // conexão com o banco de dados
            include('config.php');

            // Verifica se a variável page existe
                if (isset($_REQUEST['page'])) {
                    // includes das páginas
                    switch ($_REQUEST['page']) {
                        // marcas
                        case 'marca-listar':
                            include('marca/marca-listar.php');
                            break;
                        case 'marca-cadastrar':
                            include('marca/marca-cadastrar.php');
                            break;
                        case 'marca-editar':
                            include('marca/marca-editar.php');
                            break;
                        case 'marca-salvar':
                            include('marca/marca-salvar.php');
                            break;

                        // Modelos
                            // marcas
                        case 'modelo-listar':
                            include('modelo/modelo-listar.php');
                            break;
                        case 'modelo-cadastrar':
                            include('modelo/modelo-cadastrar.php');
                            break;
                        case 'modelo-editar':
                            include('modelo/modelo-editar.php');
                            break;
                        case 'modelo-salvar':
                            include('modelo/modelo-salvar.php');
                            break;
                
                        default:
                            // Código a ser executado quando 'page' não é igual a 'value'
                            print "<h1>Seja bem vindo</h1>";
                    }
                } else {
                    // Código a ser executado quando 'page' não está definida
                    print "<h1>Seja bem vindo</h1>";
                }
            ?>
        </div>
    </div>
</div>

    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>