<?php  
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
$email = new \SendGrid\Mail\Mail();

//$email->addTo("gabriel.fresco09@gmail.com");
$email->addTo("jlombardo@scentertainment.biz");
$email->addTo("acattoandrea@gmail.com");
$email->addTo("wfresco@scentertainment.biz");
$email->setFrom($_POST['email'], $_POST['name']);
$email->setSubject("Booking SC");
$email->addContent(
    "text/plain", $_POST['message']
);
/*$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);*/

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
$response = $sendgrid->send($email);
?>