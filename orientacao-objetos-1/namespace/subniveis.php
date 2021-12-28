<?php

require_once "../src/Email/Adaptadores/Mailgun/Adaptador.php";

$mailgun = new \Email\Adaptadores\Mailgun\Adaptador;
$ses = new \Email\Adaptadores\SES\Adaptador;

var_dump($mailgun, $ses);