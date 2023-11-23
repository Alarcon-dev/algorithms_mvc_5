<?phP

use models\Promedio;

require_once __DIR__ . "/../models/Promedio.php";

class PromedioController
{
    public function index()
    {
        require_once __DIR__ . "/../views/promedio/promedio-register.php";
    }

    public function saveInfo()
    {

        if ($_POST) {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $nota_1 = $_POST['nota_1'];
            $nota_2 = $_POST['nota_2'];
            $nota_3 = $_POST['nota_3'];



            $promedio = new Promedio;
            $promedio->setName($name);
            $promedio->setLastName($lastname);
            $promedio->setNota_1($nota_1);
            $promedio->setNota_2($nota_2);
            $promedio->setNota_3($nota_3);
            $nota = $promedio->getPromedio();

            require_once __DIR__ . "/../views/promedio/lista.php";
        }
    }
}
