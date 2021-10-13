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
    <link rel="stylesheet" type="text/css" href="">

</head>






<?
$id = $_GET['id']; 
$result_arquivos = "SELECT * FROM arquivo WHERE codigo = '$id'";
$resultado_arquivo = mysqli_query($conn, $result_arquivos);

?>


<div class="col-md-12">
    <?
   
    
   

    while ($rows_nomes = mysqli_fetch_array($resultado_arquivo)) {

        $arquivo = $rows_nomes['arquivo'];
        $telefone = $rows_nomes['telefone'];
        $data = $rows_nomes['data'];
        $senha = $rows_nomes['senha'];
        $extenção = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));



    ?>

        <? if ($extenção == $extenção) {   ?>

            <div style="height: 700px; width:100%">
                <embed src="upload/<?= $arquivo ?>" type="application/pdf" width="100%" height="100%">
            </div>



        <? } else {
            echo "não visualizei";
        } ?>





    <? } ?>

</div>

<!-- JavaScript (Opcional) -->
<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>

</html>