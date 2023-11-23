<?php
require_once __DIR__ . "/../models/Respuesta.php";
class RespuestaController
{
    public function index()
    {
        require_once __DIR__ . "/../views/respuestas/test.php";
    }

    public function reception()
    {
        if ($_POST) {



            $pregunta_1 = $_POST['pregunta1'];
            $pregunta_2 = $_POST['pregunta2'];
            $pregunta_3 = $_POST['pregunta3'];
            $pregunta_4 = $_POST['pregunta4'];

            $respuesta = new Respuesta;
            $respuesta->setPregunta1($pregunta_1);
            $respuesta->setPregunta2($pregunta_2);
            $respuesta->setPregunta3($pregunta_3);
            $respuesta->setPregunta4($pregunta_4);
            $respuestas = $respuesta->getResult();

            require_once __DIR__ . "/../views/respuestas/verNota.php";
        }
    }
}
