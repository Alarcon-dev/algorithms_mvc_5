<?php

namespace models;

class Promedio
{
    private $nota_1, $nota_2, $nota_3;
    private $name, $lastName;


    public function getNota_1()
    {
        return $this->nota_1;
    }


    public function setNota_1($nota_1)
    {
        $this->nota_1 = $nota_1;

        return $this;
    }


    public function getNota_2()
    {
        return $this->nota_2;
    }


    public function setNota_2($nota_2)
    {
        $this->nota_2 = $nota_2;

        return $this;
    }


    public function getNota_3()
    {
        return $this->nota_3;
    }


    public function setNota_3($nota_3)
    {
        $this->nota_3 = $nota_3;

        return $this;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getPromedio()
    {
        $promedio = $this->name . " " . $this->lastName . " : " . ($this->getNota_1() + $this->getNota_2() + $this->nota_3) / 4;

        return $promedio;
    }
}
