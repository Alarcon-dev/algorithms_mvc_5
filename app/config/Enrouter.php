<?php
class Enrouter
{
    public function __construct()
    {

        try {
            $url = $this->getUrl();

            $className = !empty($url[0]) ? $url[0] . 'Controller' : 'HomeController';
            $methodName = !empty($url[1]) ?  $url[1] : 'index';

            $controllerFile =  __DIR__ . "/../controller/$className.php";

            if (file_exists($controllerFile)) {
                require  __DIR__ . "/../controller/$className.php";
                $controller = new $className();
            } else {
                throw new Exception("Error: Controlador no existe");
            }

            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                throw new Exception("Error: metodo no existe");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    private function getUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "";

        $url = filter_var($url, FILTER_SANITIZE_SPECIAL_CHARS);

        return $url = explode("/", $url);
    }
}
