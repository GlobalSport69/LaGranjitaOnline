<?php 
if(isset($_POST)){
    require_once '../vendor/autoload.php';
    echo "hello desde Job";
     //echo "hello";
     var_dump($_POST);
     // Create the Transport
     $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
     ->setUsername('caribeapuestas@gmail.com')
     ->setPassword('Obtenerayuda1.')
     ;
     // Create the Mailer using your created Transport
     $mailer = new Swift_Mailer($transport);
 
     // Create a message
     $message = (new Swift_Message('Wonderful Subject'))
     ->setFrom([$_POST["email"] => $_POST["name"]])
     ->setTo(['kollon01@gmail.com' => 'A name'])
     ->setBody($_POST["name"] . '<br>' . $_POST["email"] . '<br>' . $_POST["phone"])
     ;
 
     // Send the message
     $result = $mailer->send($message);
     //var_dump(view($result));
     /*$_POST["name"]
     $_POST["email"]
     $_POST["msg"]*/
}
?>