<?php

require_once("Notificacao.php");

class Email extends Notificacao {
    public function __construct(string $destinatario, string $mensagem) {
        parent::__construct($destinatario, $mensagem);
    }

    public function enviar(): void {
        echo "Enviando e-mail para <b>{$this->getDestinatario()}</b> com a mensagem: <b>{$this->getMensagem()}</b> <br>";
    }
}
