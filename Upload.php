
<?
require "./config.php";

$msg = false;

if(isset($_FILES['arquivo'])){


    $arquivo = $_FILES['arquivo']['name'];
    $extenção = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    $novo_nome = md5(time()). "." . $extenção;
    $diretorio = "upload/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    $sql_code = "INSERT INTO arquivo (codigo, arquivo, data) VALUES('', '$novo_nome', NOW())";
    
    if(mysqli_query($conn, $sql_code))
    
       $msg = "Arquivo enviado com sucesso!";
    
    else
    
       $msg = "Falha ao enviar arquivo!";  
    }

 
?>
<html>
<h1>Upload de arquivos</h1>

<div style="color: blue ;">
<? if(isset($msg) && $msg != false){
        echo "<p> $msg <p/>";
        } ?>

</div>

<form action="Upload.php" method="POST" enctype="multipart/form-data" >
Arquivo <input type='file' require  name='arquivo'>
        <input type="Submit" value="Salvar"> 

</form>

</html>



