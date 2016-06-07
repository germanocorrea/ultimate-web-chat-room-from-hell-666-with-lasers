<?php

class Usuario
{
    private $nome;

    private $email;

    function __construct()
    {
        $this->arquivo = new Arquivo('usuarios.json');
    }

    public function autenticar($usuario, $senha)
    {
        $user_data = $this->arquivo->ler();

        foreach ($user_data as $user_info) {
            if ($user_info['usuario'] == $usuario && $user_info['senha'] == $senha) {
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
                return true;
            }
        }
    }

    public function autenticado()
    {
        return $_SESSION['usuario'] != null && $_SESSION['senha'] != null;
    }

    public function criar($usuario, $senha, $email)
    {
        $usuario_array = [
            'usuario' => $usuario,
            'senha' => $senha,
            'email' => $email
        ];

        return $this->arquivo->gravar($usuario_array, $usuario_array['usuario']);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}
