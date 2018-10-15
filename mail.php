<?php  
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
/*use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('69f6be3ba6fb761ab78bfb909fb41ee2-c8e745ec-39634e8c');
$domain = "sandbox2127e84798d848d6b3ec774cfc729684.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <postmaster@sandbox2127e84798d848d6b3ec774cfc729684.mailgun.org>',
    'to'      => 'Baz <gfresco9@atixlabs.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));*/
//use SendGrid;
//$sendgrid = new SendGrid($apiKey);
$email = new \SendGrid\Mail\Mail();

$email->addTo("gfresco@atixlabs.com");
$email->setFrom("gabriel.fresco09@gmail.com");
$email->setSubject("Sending with SendGrid is Fun");
$email->addContent(
    "text/plain", "and easy to do anywhere, even with PHP"
);
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);

$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
$response = $sendgrid->send($email);
?>