<?php  
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('2d693004959b99fd7969d9b6816ca025-b0aac6d0-1077439f');
$domain = "sandbox34936b992b834ef5aed622cbc6c7a9bb.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'Excited User <mailgun@sandbox34936b992b834ef5aed622cbc6c7a9bb.mailgun.org>',
    'to'      => 'Baz <gabriel.fresco09@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));
?>