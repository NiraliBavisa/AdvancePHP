<?php
class Router {
    
    private $routes;

    public function __construct(array $routes) {
        $this->routes = $routes;
    }

    public function route($url) {
        foreach ($this->routes as $route => $handler) {
            $pattern = $this->buildPattern($route);
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches); 
                $this->invokeControllerAction($handler, $matches);
                return;
            }
        }
        $this->handle404();
    }

    private function buildPattern($route) {
        return '#^' . preg_replace('/\{(\w+)\}/', '(?P<$1>[^/]+)', $route) . '$#';
    }

    private function invokeControllerAction($handler, $params) {
        list($controllerName, $action) = explode('@', $handler);
        $controller = new $controllerName();
        $this->callControllerAction($controller, $action, $params);
    }

    private function callControllerAction($controller, $action, $params) {
        $reflectionMethod = new ReflectionMethod($controller, $action);
        $methodParameters = $reflectionMethod->getParameters();

        $resolvedParams = [];
        foreach ($methodParameters as $param) {
            $paramName = $param->getName();
            $resolvedParams[] = $params[$paramName] ?? null;
        }

        $reflectionMethod->invokeArgs($controller, $resolvedParams);
    }

    private function handle404() {
        echo "404 Not Found";
    }
}

?>
