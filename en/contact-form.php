<?php
    require('config.php'); 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../../vendor/phpmailer/src/Exception.php';
    require '../../vendor/phpmailer/src/PHPMailer.php';
    require '../../vendor/phpmailer/src/SMTP.php';


    

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