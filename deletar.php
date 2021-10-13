<? include_once "config.php";?>
<?
$id = $_GET['id'];
$conn = mysqli_connect($sevidor, $dbusuario, $dbsenha,$dbname);
mysqli_select_db($conn, $dbname);
$sql = "DELETE FROM arquivo WHERE codigo = '$id'";

if (mysqli_query($conn, $sql)){
echo "<script>alert('Deletei agora já era !');
        window.location ='gestor.php'; </script>";
    }
        else {
        echo "Não Deletei";  }
?>