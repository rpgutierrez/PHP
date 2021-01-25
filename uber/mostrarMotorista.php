<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UBER</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>
  <section class="section hero is-primary is-bold">
    <div class="container">
      <div align="center"> 
        <img src="https://logospng.org/download/uber/logo-uber-antiga-256.png">
      </div>
      <nav class="navbar" role="navigation" aria-label="dropdown navigation">
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link has-text-dark">
            MENU
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item has-text-dark" href="cadastrarMotorista.php">
              Cadastrar
            </a>
            <a class="navbar-item has-text-dark" href="mostrarMotorista.php">
              Mostrar
            </a>
            <hr class="navbar-divider">
            <div class="navbar-item has-text-dark">
              Version 1.0.0
            </div>
          </div>
        </div>
      </nav>
      <div class="table-container">
        <p class="subtitle has-text-dark" align="center">Lista de Motoristas</p>
        <form>
          <div class="field">
            <label class="label as-text-dark">Pesquisar: </label>
            <div class="control">
              <input class="input hero is-bold is-white" type="text" placeholder="Busca por código, nome ou CPF" name="pesquisa" id="pesquisa">
            </div>
          </div>
        </form>
        <br><br>
        <table class="table is-fullwidth hero is-white is-bold">
          <thead>
            <tr>
              <th>Codigo</th>
              <th>Nome</th>
              <th>CPF</th>
              <th>Opção</th>
            </tr>
          </thead>
          <tbody class="resultadoPesquisa">
            <?php
            include 'crudMotorista.php';
            $resultado = mostrarMotorista();
            if($resultado){
              while($resultadoSeparado = mysqli_fetch_assoc($resultado)){

                echo "
                <tr>
                <td>$resultadoSeparado[codigo]</td>
                <td>$resultadoSeparado[nome]</td>
                <td>$resultadoSeparado[cpf]</td>

                <td><a class='button is-dark' href='editarMotorista.php?codigo=$resultadoSeparado[codigo]'>Editar</a></td>
                </tr>
                ";
              }
            }
            ?>

          </tbody>
        </table>
      </div>
      <hr>
      <div class="content has-text-centered has-text-grey-darker">
        <p>
          Desenvolvido por <a href="https://www.linkedin.com/in/ronierpgutierrez/" class="has-text-danger">Ronier Gutierrez</a> (2021).
        </p>
      </div>
      
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="javascriptPesquisar.js" type="text/JavaScript">
    </script>
  </section>
</body>

</html>