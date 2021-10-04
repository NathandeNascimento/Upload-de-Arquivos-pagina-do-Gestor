 
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



  <!-- Estilo customizado -->
  <link rel="stylesheet" type="text/css" href="modeloo.css">;
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<style>
  body{
    background-image: url(img1/musica.png);
    overflow-x:hidden;
  }
    @media(max-width: 460px){
      body{
        background-image: url(img1/violao.png);
      }
    }
    

  </style>

 
 
 
 <?
   require "./config.php";

   $msg = false;

   if (isset($_FILES['arquivo'])) {

      $telefone = $_POST['tel'];
      $arquivo = $_FILES['arquivo']['name'];
      $extenção = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
      $novo_nome = md5(time()) . "." . $extenção;
      $diretorio = "upload/";

      move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
      $conn = mysqli_connect($sevidor, $dbusuario, $dbsenha, $dbname);

      $sql_code = "INSERT INTO arquivo (codigo, arquivo, data, telefone) VALUES('', '$novo_nome', NOW(), '$telefone')";

      if (mysqli_query($conn, $sql_code))

         $msg = "<script>alert('ARQUIVO ENVIADO COM SUCESSO!!!');
      window.location = 'verificacao.php';  </script>";



      else

         $msg = "Falha ao enviar arquivo!";
   }


   ?>





<body>

 <h1><i> Upload de arquivos </i></h1>

 <div style="color: blue ;">
    <? if (isset($msg) && $msg != false) {
         echo "<p> $msg <p/>";
      }
      ?>

 </div>

 <form action="Upload.php" method="POST" enctype="multipart/form-data">
 <div class="animate__animated animate__zoomInDown">

   <label for="Arquivo"><img class="img0" src="img1/grampo.jpg" width="100%" id="imgPhoto">  </label>
   <input type='file' required name='arquivo' id="Arquivo"> <br /><br />
   
</div>



<div class=" row tel">
<div class="input-group mb-3 col-md-5">
  <input type="tel" class="form-control" placeholder="+123 456 789 321" required name="tel" autofocus >
  <div class="input-group-append">
    <button class="btn btn-outline bg-info" type="submit">Enviar</button>
    &nbsp;<a href="http://localhost/Projeto%20Arte%20Digital/verificacao.php"><button class="btn btn-outline bg-info" type="button">Validação</button></a>
  </div>
</div>

<div class="col-md-4"></div>
<div class="col-md-1 " style="padding-left:0px"><a  href="https://kinsta.com/pt/blog/html-fontes/"><img class="img1"  src="img1/suporte1.gif"  alt=""></div>
<div class="col-md-1 d-none d-md-inline" class="img1" style="padding: 10px 20px 0px 0px;">Suporte</div></a>


</div>

<!--
</div>
    <div class=" tel"> 
    telefone: <input type="tel" name="tel" class="input-group" placeholder="+123 456 789 321"><br />
    
    <button class="btn bg-info " type="Submit">Salvar</button>
    
  </div>
    --> 

</form>
<br/>
  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>

</html>