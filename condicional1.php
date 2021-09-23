<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
<?
//comunicação com DB...
include_once "config.php";



  // busca de arquivos
  $numAleatorio = $_POST['valida'] ;
  $result_arquivos = "SELECT * FROM arquivo WHERE arquivo LIKE '$numAleatorio'";
  $resultado_arquivo = mysqli_query($conn, $result_arquivos);
  $rows_nomes = mysqli_fetch_array($resultado_arquivo);
  $arquivo = $rows_nomes['arquivo'];
  $nada = '';
  

  // estrutura condicional desabilitar botao
  //$numAleatorio = $_POST['valida'];
 //$numBanco = $arquivo;
 //echo $arquivo."<br/>";

 

    if ($arquivo == $numAleatorio && $arquivo != $nada ) {

      
         
           echo "<script>alert('PARABENS!!!, Já é possivel realizar o Download!!!'); </script>";

    
    }

       else {

        
        echo "<script>alert('Por favor, digite uma seguência numérica Valida !!!'); window.location='verificacao.php';</script>";
           
    }
 
    
    ?>
<script>
        function redirecionamento(){
            alert('Evento Disparado' );
            window.location.href = "https://www.devmedia.com.br/javascript-redirect-redirecionando-o-usuario-com-window-location/39809";
        }
    </script>

<?  
  
  


?>

    <title>Botão</title>
  </head>
  <body>

    <form action="Upload.php">
    <div class="row">
 <div  col-md-6>
     <button onclick="redirecionamento()" style="margin: 50px 50px;" class="btn bg-primary  "  type="button" >  Click aqui para fazer o dowload
     </button> <br/>
     <button  style="margin: 50px 50px;" class="btn bg-primary  "  type="submit"  >Click aqui para fazer o Upload
    </button>

 </div>

    </div>
  </form>
      <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>