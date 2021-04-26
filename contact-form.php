<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require __DIR__ . '/vendor/phpmailer/src/Exception.php';
    require __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
    require __DIR__ . '/vendor/phpmailer/src/SMTP.php';


    if($_SERVER['REQUEST_METHOD'] == 'POST' &&  isset($_POST['contact'])){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Port       = 465;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "web@introarquitectura.com.ar";
        $mail->Password   = "Pagina2021$$";

        $mail->IsHTML(true);
        $mail->AddAddress("info@introarquitectura.com.ar", "Intro Arquitectura");
        $mail->SetFrom($_POST['email'], $_POST['name']);
        $mail->AddReplyTo($_POST['email'], $_POST['name']);
        $mail->AddCC("web@introarquitectura.com.ar", "Intro Arquitectura");
        $mail->Subject = "Nuevo contacto recibido de introarquitectura.com.ar";
        $content = "<p style='padding-bottom: 9px'><span style='font-weight: bold'>Nombre: </span>".$_POST['name']."</p>";
        $content .= "<p style='padding-bottom: 9px'><span style='font-weight: bold'>Email: </span>".$_POST['email']."</p>";
        $content .= "<p style='padding-bottom: 9px'><span style='font-weight: bold'>Teléfono: </span>".$_POST['phone']."</p>";
        $content .= "<p style='padding-bottom: 9px'><span style='font-weight: bold'>Mensaje: </span>".$_POST['message']."</p>";

        $mail->MsgHTML($content); 
        
        if(!$mail->Send()) {
            echo "Error al enviar el mensaje";
            // var_dump($mail);
        } else {
            echo "Email sent successfully";
        }
    }

?>

<form class="form-contact js-contact-form" method="POST" 
    action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
    <div class="form-row no-gutters">
        <div class="col-md-6">
            <input class="au-input" type="text" name="name" placeholder="Nombre" required="required">
            <input class="au-input" type="email" name="email" placeholder="Correo electrónico*" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
            <input class="au-input" type="text" name="phone" placeholder="Teléfono" required="required">
        </div>
        <div class="col-md-6 p-r-0">
            <textarea class="au-textarea" name="message" placeholder="Mensaje*" required="required"></textarea>
            <div class="text-right">
                <button name='contact' class="au-btn au-btn--solid" type="submit">
                Enviar mensaje
                </button>
            </div>
        </div>
    </div>
</form>