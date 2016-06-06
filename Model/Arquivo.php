<?php

class Arquivo
{
    private $arquivo;

    function __construct($arquivo)
    {
        $this->arquivo = $arquivo;

        if (!file_exists('data/')) {
            if (!file_exists('data/' . $arquivo)) {
                mkdir('./data/', 0777);
                $file = fopen('./data/' . $arquivo, 'w');
                fclose($file);
            }
        }
    }

    public function gravar($dados)
    {
        return file_put_contents($this->arquivo, $dados);
    }

    public function ler()
    {
        return file_get_contents($this->arquivo);
    }
}
