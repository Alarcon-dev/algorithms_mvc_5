<?php

class Respuesta
{
    private $pregunta1, $pregunta2, $pregunta3, $pregunta4;

    public function getCorrecto($counter_1)
    {
        $correctos = $counter_1;

        return $correctos;
    }

    public function getInCorrecto($counter_2)
    {
        $incorrectos = $counter_2;

        return $incorrectos;
    }

    public function getBlancas($counter_3)
    {
        $blacas = $counter_3;

        return $blacas;
    }

    public function getNota($correcto)
    {
        $calificacion = $correcto;
        return $calificacion;
    }

    public function getPregunta1()
    {
        return $this->pregunta1;
    }


    public function setPregunta1($pregunta1)
    {
        $this->pregunta1 = $pregunta1;

        return $this;
    }


    public function getPregunta2()
    {
        return $this->pregunta2;
    }


    public function setPregunta2($pregunta2)
    {
        $this->pregunta2 = $pregunta2;

        return $this;
    }


    public function getPregunta3()
    {
        return $this->pregunta3;
    }


    public function setPregunta3($pregunta3)
    {
        $this->pregunta3 = $pregunta3;

        return $this;
    }


    public function getPregunta4()
    {
        return $this->pregunta4;
    }


    public function setPregunta4($pregunta4)
    {
        $this->pregunta4 = $pregunta4;

        return $this;
    }


    public function getResult()
    {
        $array = [$this->getPregunta1(), $this->getPregunta2(), $this->getPregunta3(), $this->getPregunta4()];
        $counter_1 = 0;
        $correcto = 0;
        $counter_2 = 0;
        $incorrecto = 0;
        $counter_3 = 0;
        $blanco = 0;
        $long = count($array);

        for ($i = 0; $i < $long; $i++) {
            if ($array[$i] == 4) {
                $counter_1++;
                $correcto += 4;

                if ($correcto < 0) {
                    $correcto = 0;
                }
            }

            if ($array[$i] == 1) {
                $counter_2++;
                $incorrecto = $counter_2;
                $correcto -= 4;

                if ($correcto < 0) {
                    $correcto = 0;
                }
            }

            if ($array[$i] == 1) {
                $counter_3++;
                $blanco = $counter_3;
                $correcto -= 4;

                if ($correcto < 0) {
                    $correcto = 0;
                }
            }
        }

        $result = "Calificación: " . $this->getNota($correcto) . "<br>";
        $result .= "Respuestas acertadas: " . $this->getCorrecto($counter_1) . "<br>";
        $result .= "Respuestas Incorrectas: " . $this->getInCorrecto($counter_2) . "<br>";
        $result .= "Respuestas en blanco: " . $this->getBlancas($counter_3);


        return $result;
    }
}
