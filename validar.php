<?php
    include('db.php');

    $email = $_POST['email'];
    $contraseña= $_POST['contraseña'];

    $query = "SELECT * FROM estudiantes where correo = '$email' and contraseña = '$contraseña'";
    $result = mysqli_query($conn, $query);

    $filas = mysqli_num_rows($result);

    if(!$filas){
        
        header('Location: index.php');
        
    }else{
        $_SESSION['login'] = $filas;
        header('Location: index_2.php');
    }
    // mysqli_free_result($result);
    // mysqli_close($conn);
    
    
    // <!-- ENVIO DE COOREO ELECTRONICO -->

    
    require 'src/Exception.php';
    require 'src/PHPMailer.php';
    require 'src/SMTP.php';

    $correo = $_POST["email"];
    $mensaje = $_POST["mensaje"];
 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
    
        
        //https://support.google.com/mail/answer/185833?hl=es-419 POR ACA INGRESAN PARA CREAR LA CLAVE DE LA APP
        $mail->Username   = 'hugovalderrama5@gmail.com';                     // SMTP username
        $mail->Password   = 'xoijiabfojtknkgl';                               // SMTP password
  
        //DESDEEE -->
        $mail->setFrom('hugovalderrama5@gmail.com', 'Hugo Valderrama'); 
        
        //La siguiente linea, se repite N cantidad de veces como destinarios tenga
        $mail->addAddress($correo, $correo);     // Add a recipient
   
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Mensaje automatico';
        $mail->Body    = $mensaje;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();

        $data["res"] = 'Message has been sent';

    } catch (Exception $e) {
        $data["res"] = 'Error';
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    echo json_encode($data);
?>