<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enviar e-mail com php</title>
</head>

<body>

    <?

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;


    require './vendor/autoload.php';

    $mail = new PHPMailer(true);

    $nome = '';
    $e_mail = $_POST['email0'];
    $sequencia = $_POST['sequencia'];

    try {
        //Server settings
       // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'testenathandev.com@testnathandev.com';
        $mail->Password   = '253426nS';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('testenathandev.com@testnathandev.com', 'Art Digital');
        $mail->addAddress("$e_mail", 'Cliente Vip');

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Caracteres "Chave"';
        $mail->Body    = "Ola Cliente, ficamos <b>Muito Felizes</b> pelo seu enterese em nosso conteúdo musical!!</br></br>Sua seguencia de caracteres para debloquear o Dowload é <b>$sequencia</b>";
        $mail->AltBody = "Ola Nathan você é muto Lindo!\n texto segunda linha";
 
        $mail->send();

        echo "<script>alert('E-MAIL ENVIADO COM SUCESSO!!!');
        window.location = 'verificacao.php';  </script>";
    } catch (Exception $e) {
        echo "Erro: Não consegui enviar. Error: PHPMailer {$mail->ErrorInfo}";
    }

    ?>

</body>

</html>