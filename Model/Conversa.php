<?php

class Conversa
{
    function __construct()
    {
        $this->arquivo = new Arquivo('chat.json');
    }

    public function adicionar(Usuario $usuario, $texto)
    {
        $message_information = [
            'username' => $usuario->getNome(),
            'texto' => $texto
        ];

        $this->arquivo->gravar($message_information, $usuario->getNome());
    }

    public function listar()
    {
        return $this->arquivo->ler();
    }
}
