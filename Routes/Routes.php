<?php
namespace Routes;
class Routes
{
    public $controller = 'HomeController';
    public $method = 'index';
    public $params = [];

    public function __construct()
    {
        $url = $this->parseURL();
        if (isset($url[0]) && file_exists('FRANCO/controllers/' . $url[0] . 'Controller.php')) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }
        require_once('../controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller();

        if(isset($url[1]) && method_exists($this->controller,$url[1]))
        {
            $this->method=$url[1];
            unset($url[1]);
        }
        $this->params= $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method],$this->params);

        //    var_dump($url);
    }
    private function parseURL()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            return explode('/', filter_var(rtrim(substr($_SERVER['REQUEST_URI'], 1), '/'), FILTER_SANITIZE_URL));
        }
    }
}
