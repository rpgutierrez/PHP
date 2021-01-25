<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UBER</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body">
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
          <a class="navbar-item has-text-grey-darker" href="cadastrarMotorista.php">
            Cadastrar
          </a>
          <a class="navbar-item has-text-grey-darker" href="mostrarMotorista.php">
            Mostrar
          </a>
          <hr class="navbar-divider">
          <div class="navbar-item has-text-grey-darker">
            Version 1.0.0
          </div>
        </div>
      </div>
    </nav>
    <div class="container">  
      <form method="post" action="controleMotorista.php">
        <div align="center">
          <p class="subtitle has-text-grey-darker">Cadastro de Motoristas</p>
        </div>
        <br>
        <div class="field">
          <label class="label">Nome:</label>
          <div class="control">
            <input class="input" type="text" placeholder="Nome do Motorista" name="nome" id="nome">
          </div>
        </div>

        <div class="field">
          <label class="label">CPF: </label>
          <div class="control">
            <input class="input" type="text" placeholder="xxx.xxx.xxx-xx" name="cpf" id="cpf">
          </div>
        </div>
        
      </br>
      <div align="center">
        <div class="control">
          <button type="submit" class="button is-dark" name="opcao" value="cadastrar">Cadastrar</button>
        </div>
      </div>
      
    </form>


  </div>
  <br>
  <hr>
  <br>
  
  <div align="center">
    <h1 class="has-text-grey-darker is-bold subtitle" >Localização</h1>
    <br>
    <div class="box hero is-bold is-white">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.08831531846!2d-46.688516470804664!3d-23.591660470025072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5751e511bc5d%3A0x6b42a747c6cf27f3!2sUber%20Technologies%20Inc.!5e0!3m2!1spt-BR!2sbr!4v1611539464591!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>
  <br>
  <hr>
</div>

<div class="content has-text-centered has-text-grey-darker">
  <p>
    Desenvolvido por <a href="https://www.linkedin.com/in/ronierpgutierrez/" class="has-text-danger">Ronier Gutierrez</a> (2021).
  </p>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="jquery.maskedinput.js" type="text/javascript"></script>
<script>
  jQuery(function($){
    $("#cpf").mask("999.999.999-99");
  });
</script>
</section>
</body>
</html>