<?php
session_start();
include_once("config.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM arquivo WHERE codigo = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_arquivo = mysqli_fetch_assoc($resultado_usuario);
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
<style>

*{margin: 0px;
  padding: 0px;
}

body{
    background-color: rgba(0, 0, 0, 0.905);
   
    color: white;
    box-sizing: border-box;
    }
	.mar{ margin-left:30%;}
	@media(max-width:416px){
		.mar{margin-left: 2px;}
	}

</style>
</head>

<body>

	<p style="margin-top: 12px;">
	<a href="gestor.php" class="btn-danger m-5" style="border-radius:10px; text-decoration: none;"> &nbsp&nbspX&nbsp&nbsp </a><br>
	</p>
	<div class="form-group text-center">
	<h1>Editar Senha</h1>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	

	<form method="POST" action="proc_edit_usuario.php" class="input-group">
		<input type="hidden" name="id" value="<?php echo $row_arquivo['codigo']; ?>">

		
		<input type="text" name="senha" placeholder="Digite o nome completo" class="form-control col-md-5 mar"  value="<?php echo $row_arquivo['senha']; ?>">	
		 <div class="input-group-append">
		<input type="submit" class="btn btn-outline-primary" value="Editar">
		 </div>
	</form>

	</div>
	<section>
		<div style="text-align: center; margin: 50px 10px; border-radius: 50px; font-size: 1em; color: #ffffff;"> Todos os direitos reservados &copy; NN - Nathan Nascimento - 2021</div>
	</section>

	 <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>