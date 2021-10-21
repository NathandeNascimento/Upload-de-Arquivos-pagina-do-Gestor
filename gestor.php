<? require "config.php";
session_start()
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="css/gestr.css">


</head>

<body>
  
    

  


  <h1 style="position:absolut fixed;">Arquivos:</h1>
  



  <?
  $result_arquivos = "SELECT * FROM arquivo";
  $resultado_arquivo = mysqli_query($conn, $result_arquivos);

  ?>

  <?

  while ($rows_nomes = mysqli_fetch_array($resultado_arquivo)) {
    $email = $rows_nomes['email'];
    $arquivo = $rows_nomes['arquivo'];
    $telefone = $rows_nomes['telefone'];
    $data = $rows_nomes['data'];
    $senha = $rows_nomes['senha'];
    $extenção = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

  ?>

    <?
    if ($extenção == "png" || $extenção == "jpeg" || $extenção == "jpg") {
    ?>
      <div class="row">

        <div class="col-md-12 text-center">

          <div class="">
            <img class="img-fluid col-md-6 img-thumbnail previw" src="upload/<?= $arquivo ?>">
          </div>
        <?
      }
      if ($extenção == "pdf" ) {
        ?>
          <div class="text-center ">
            <embed type="application/pdf" style="" class="img-fluid col-md-6 img-thumbnail previw" src="upload/<?= $arquivo ?>">
          </div>

        <? } ?>

        <script>
          function deletar_id() {
            if (confirm("Você deseja deletar este registro? Vou apagar e não tem como recuperar depois!!!"))

              document.forms[0].submit();
            else
              return false;
          }
        </script>
        <div class="text-center m-4">
        <? echo " Senha: " . $senha . "</br> E-mail: " . $email . "</br> Telefone: " . $telefone . " </br> Data:  " . $data . "  </br>
    <a href=" . "edit_usuario.php?id=" . $rows_nomes['codigo'] . "><button class='btn btn-outline bg-info'>&nbspEditar&nbsp&nbsp</button></a>
    <a href=" . "pdf.php?id=" . $rows_nomes['codigo'] . "><button class='btn btn-outline bg-info'>Visualizar</button></a>
    <a href=" . "deletar.php?id=" . $rows_nomes['codigo'] . "><button  onclick='return deletar_id()' class='btn btn-outline bg-info' >Deletar</button></a>
    
    <a href=" . "envia_email.php?id=" . $rows_nomes['codigo'] . "><button class='btn btn-outline bg-success env-email'>Enviar E-mail</button></a><hr> ";
       ?>



        </div>
        </div>
      </div>
      <?}?>

      <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <section>
		<div style="text-align: center; margin: 50px 10px; border-radius: 50px; font-size: 1em; color: #ffffff;"> Todos os direitos reservados &copy; NN - Nathan Nascimento - 2021</div>
	</section>

</body>

</html>