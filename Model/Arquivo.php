<?php

class Arquivo
{
    private $arquivo;

    function __construct($arquivo)
    {
        $this->arquivo = 'data/' . $arquivo;

        if (!file_exists('data/')) {
            if (!file_exists('data/' . $arquivo)) {
                mkdir('./data/', 0777);
                $file = fopen('./data/' . $arquivo, 'w');
                fclose($file);
            }
        }
    }

    public function gravar(Array $dados, $key)
    {
        $file = $this->ler();

        $file[$key] = $dados;

        return file_put_contents($this->arquivo, json_encode($file));
    }

    public function ler()
    {
        return json_decode(file_get_contents($this->arquivo), true);
    }
}
