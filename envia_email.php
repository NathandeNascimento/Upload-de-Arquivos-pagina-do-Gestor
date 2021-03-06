<?require "config.php";
session_start();

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_arquivos = "SELECT * FROM arquivo WHERE codigo = '$id'";
$resultado_arquivo = mysqli_query($conn, $result_arquivos);
$rows_nomes = mysqli_fetch_array($resultado_arquivo);
$email = $rows_nomes['email'];
$senha = $rows_nomes['senha'];


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
    <title>E-mail</title>

    <style>
        *{margin:0px;
        padding:0px;
        box-sizing: border-box;
    }

        body{
            background-image: url(img1/mundo_email.png);
            color: white;
            font-size: 2em;
            font-family:Century Gothic ;
        }
        .container{
            margin-top: 10%;
            border-radius: 30px;
            background: rgba(0, 0, 0, 0.222);
			box-shadow: 1px 2px 10px black, 3px 6px 20px black;
            padding-bottom: 15px;
            transition: 1s;
        }

        .container:hover{
            transition: 3s;
            box-shadow: 1px 1px 10px white, 3px 6px 50px white;
        }
        .mar-l{margin-left:28%;}

        @media(max-width:769px){
            .mar-l{margin-left:0%;}
           
        
        }
        @media(max-width:416px){
            .mar-l{margin-left:0%;}
            .container{margin:50% 5%; width: 90%;}
        
        }
    </style>

</head>
<body>
    <div class=" container text-center form-group">
    
    <form action="./email/env_email.php" method="post">
   
    <div class="col-md-5 mar-l" style=" " >
    <label for="">E-mail:</label></br>
    <input type="email" name="email0" class="form-control" value="<?echo $email?>">
    </div>

    <div class="col-md-5 mar-l " style=" ">
    <label for="">Chave:</label></br>
    <input type="text" name="sequencia" class="form-control " value="<?echo $senha?>">
    <input type="submit" class="btn btn-primary "  value="Enviar">
    </div>
    </form>
    </div>

    <section>
		<div style="text-align: center; margin: 0px 10px; border-radius: 50px; font-size: 20px; color: #ffffff;"> Todos os direitos reservados &copy; NN - Nathan Nascimento - 2021</div>
	</section>
    <!-- JavaScript (Opcional) -->
      <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>