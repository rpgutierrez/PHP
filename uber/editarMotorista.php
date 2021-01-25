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
    
    <div class="container">
      <?php 
      include 'crudMotorista.php';
      $codigo=$_GET["codigo"];
      $resultado= mostrarMotoristaAlterar($codigo);
      $resultadoSeparado = mysqli_fetch_assoc($resultado)

      ?> 
      <form method="post" action="controleMotorista.php">
        <p class="subtitle has-text-dark" align="center">Edição de Motoristas</p>

        <div class="field">
          <label class="label">Nome:</label>
          <div class="control">
            <input class="input" type="text" placeholder="Nome do Motorista" name="nome" id="nome" value="<?php echo $resultadoSeparado['nome']; ?>">
          </div>
        </div>

        <div class="field">
          <label class="label">CPF: </label>
          <div class="control">
            <input class="input" type="text" placeholder="CPF" name="cpf" id="cpf" value="<?php echo $resultadoSeparado['cpf']; ?>">
          </div>
        </div>

      </br>
      <div class="control">
        <input type="hidden" name="codigo" value="<?php echo $resultadoSeparado['codigo']; ?>">
        <button class="button is-dark" name="opcao" value="alterar">Alterar</button>
        <button class="button is-dark" name="opcao" value="excluir">Excluir</button>
        <a class="button is-danger" href="mostrarMotorista.php">Cancelar</a>
      </div>
    </div>
  </form>
</div>
<hr>
<div class="content has-text-centered has-text-grey-darker">
  <p>
    Desenvolvido por <a href="https://www.linkedin.com/in/ronierpgutierrez/" class="has-text-danger">Ronier Gutierrez</a> (2021).
  </p>
</div>

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