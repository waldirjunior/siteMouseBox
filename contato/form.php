<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: MouseBox.com.br'; 
    $to = 'waldirmauriciojr@gmail.com'; 
    $subject = 'Email Inquiry';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
?>

<?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Obrigado por enviar seu e-mail!</p>';
    } else { 
        echo '<p>Oops! Algum erro aconteceu ao enviar sua mensagem.</p>'; 
    }
}
?>