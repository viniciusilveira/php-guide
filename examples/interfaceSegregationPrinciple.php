<?php
/*
 * Interface generalizada
 */
interface Birds
{
    public function walk();
    public function fly();
    public function swin();
}
class Duck implements Birds
{
    public function fly()
    {
        //lógica
    }

    public function swin()
    {
        //lógica
    }

    public function walk()
    {
        //lógica
    }
}

class Penguin implements Birds
{
    public function fly()
    {
        //lógica
    }

    public function swin()
    {
        //lógica
    }

    public function walk()
    {
        //lógica
    }
}

class Swallow implements Birds
{
    public function fly()
    {
        //lógica
    }

    public function swin()
    {
        //lógica
    }

    public function walk()
    {
        //lógica
    }
}

/*
 * Muitas interfaces específicas
 */
interface Birds
{
    public function walk();
}

interface FlyingBirds extends Birds
{
    public function fly();
}

interface SwimmingBirds extends Birds
{
    public function swin();
}

class Duck implements FlyingBirds, SwimmingBirds
{
    public function fly()
    {
        //lógica
    }

    public function swin()
    {
        //lógica
    }

    public function walk()
    {
        //lógica
    }
}

class Penguin implements SwimmingBirds
{
    public function swin()
    {
        //lógica
    }

    public function walk()
    {
        //lógica
    }
}

class Swallow implements FlyingBirds
{
    public function walk()
    {
        //lógica
    }

    public function fly()
    {
        //lógica
    }
}
