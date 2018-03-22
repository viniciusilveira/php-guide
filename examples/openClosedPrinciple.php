<?php
/*
 * Classe responsável por escrever logs em txt
 */
class Logger
{
    public function writeTxt($message)
    {
        //lógica
    }
}

/*
 * Classe responsável por escrever logs em txt e csv
 */
class Logger
{
    public function writeTxt($message)
    {
        //lógica
    }

    public function writeCsv($message)
    {
        //lógica
    }
}

/**
 * Reescrito em 3 classes cada qual com a sua funcionalidade
 */
class Logger
{
    private $writer;

    public function __construct(Writer $writer)
    {
        $this-writer = $writer;
    }

    public function write($message)
    {
        $this-writer->write($message);
    }
}

interface Writer
{
    public function write($message);
}

class Txt implements Writer
{
    public function write($message)
    {
        //lógica
    }
}

class Csv implements Writer
{
    public function write($message)
    {
        //lógica
    }
}
