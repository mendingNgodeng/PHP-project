<?php
class App {
    protected $controller = 'Dashboard'; // Default controller
    protected $method = 'index';         // Default method
    protected $params = [];              // Parameters from the URL

    public function __construct() {
        $url = $this->parseUrl();

        // Check if a controller is specified in the URL
        if (isset($url[0]) && file_exists(__DIR__ . '/../app/controllers/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        // Require the controller file
        require_once __DIR__ . '/../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Check if a method is specified in the URL
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Get parameters
        $this->params = $url ? array_values($url) : [];

        // Call the method of the controller
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
