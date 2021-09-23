<?require "config.php"
?>
<h1>Nome Arquivos DB:</h1>


  
    <?
    $result_arquivos = "SELECT * FROM arquivo";
    $resultado_arquivo = mysqli_query($conn, $result_arquivos);
    while ($rows_nomes = mysqli_fetch_array($resultado_arquivo)) {

      $arquivo = $rows_nomes['arquivo'];
      $telefone = $rows_nomes['telefone'];
      $data = $rows_nomes['data'];
      echo $arquivo . " __ " . $telefone ." __ ".$data."<br/>";
    }
    ?>