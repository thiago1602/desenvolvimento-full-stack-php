<?php

require_once "../src/Email/Envio.php";
require_once "../src/Sms/Envio.php";

use Sms\Envio as SMS;
use Email\Envio as Email;
use const Email\VERSAO;
use function Email\validar;

$email = new Email;
$sms = new SMS;

echo VERSAO . "<br>";

validar("thiagomoraes@gmail.com");
var_dump($email, $sms);