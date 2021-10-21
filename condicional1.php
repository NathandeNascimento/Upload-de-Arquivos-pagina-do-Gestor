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


  
<?
//comunicação com DB...
include_once "config.php";



  // busca de arquivos
  $numAleatorio = $_POST['valida'] ;
  $result_arquivos = "SELECT * FROM arquivo WHERE senha LIKE '$numAleatorio'";
  $resultado_arquivo = mysqli_query($conn, $result_arquivos);
  $rows_nomes = mysqli_fetch_array($resultado_arquivo);
  $arquivo = $rows_nomes['senha'];
  $nada = '';
  


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
            window.location.href = "https://www.mediafire.com/file/tk49gbc6n7wrafa/Vais_me_achar.mp3/file";
        }
    </script>

 <!-- Estilo customizado -->
 <style>

   body{background: black;
  overflow-x:hidden;}
.upload{
  box-shadow: 5px 5px 10px rgb(0, 0, 0),10px 10px 30px rgb(0, 0, 0);
}

  .upload:hover{
    transition: 1s;
    box-shadow: 15px 15px 20px rgb(31, 169, 255),10px 10px 30px rgb(0, 0, 0);

  
  }

@media(max-width:370px){
  .botao1{font-size: 30% ;
          margin-top: 150px;
          
}
}

@media(max-width:892px){
  .botao1{font-size: 50% ;
          margin-top: 50px;
          
}
}
@media(max-width:492px){
  .botao1{font-size: 30% ;
          margin-top: 100px;
          
}
}
  </style>
  

    <title>Botão</title>
  </head>
  <body>

 

    <form >
   
    <div class="row ">
      <div class="col-md-12 text-center botao1" >
       <!-- Botão de Upload-->
        <button onclick="redirecionamento()" style="margin-top:12%; font-size: 4em;" class="btn bg-primary p-5 upload " type="button">Dowload
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