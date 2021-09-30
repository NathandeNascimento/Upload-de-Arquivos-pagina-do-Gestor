 
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




<html>
<h1>Upload de arquivos</h1>

<div style="color: blue ;">
   <? if (isset($msg) && $msg != false) {
      echo "<p> $msg <p/>";
   }
   ?>

</div>

<form action="Upload.php" method="POST" enctype="multipart/form-data">
   Arquivo <input type='file' required name='arquivo'> <br/><br/>
   telefone <input type="tel" required name="tel" placeholder="+123 456 789 321" ><br/>
   <input type="Submit" value="Salvar">

</form><br/>

</html>


