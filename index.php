<?php

require_once("Notificacao.php");
require_once("Email.php");
require_once("Push.php");
require_once("Sms.php");


$notificacao1 = New Notificacao("Ale","Iniciando o codígo");
$notificacao1->enviar();

$notificacaoEmail = new Email("destinatario@example.com", "Olá, isso é uma notificação!");
$notificacaoEmail->enviar();

$notificacaoPush = new Push("usuario123", "Olá, isso é uma notificação!");
$notificacaoPush->enviar();

$notificacaoSms = new Sms("+559912345678", "Olá, isso é uma notificação!");
$notificacaoSms->enviar();