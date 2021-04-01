<?php

namespace App\Core;

use App\interfaces\IRequest;

class Router
{
    private $request;

    private $supportedHttpMethods = array(
        "GET",
        "POST"
    );

    public function __construct(IRequest $request)
    {
        $this->request = $request;
    }

    public function __call($name, $args)
    {
        list($route, $method) = $args;

        if (!in_array(strtoupper($name), $this->supportedHttpMethods)) {
            $this->invalidMethodHandler();
        }

        $this->{strtolower($name)}[$this->formatRoute($route)] = $method;
    }

    /**
     * Removes trailing forward slashes from the right of the route.
     * @param route (string)
     */
    private function formatRoute($route)
    {
        $result = rtrim($route, '/');
        if ($result === '') {
            return '/';
        }
        return $result;
    }

    private function invalidMethodHandler()
    {
        header("{$this->request->serverProtocol} 405 Method Not Allowed");
    }

    private function defaultRequestHandler()
    {
        header("{$this->request->serverProtocol} 404 Not Found");
    }

    /**ssss
     * Resolves a routes
     */
    public function resolve()
    {
        $methodDictionary = $this->{strtolower($this->request->requestMethod)};
        $formatedRoute = $this->formatRoute($this->request->requestUri);
        @$method = $methodDictionary[$formatedRoute];

        if (is_null($method)) {
            return $this->defaultRequestHandler();
            exit;
        }
        if  (is_string($method)) {
            return  $this->renderView($method);
        }

        return call_user_func_array($method, array($this->request));
    }
    
    public function renderView($view)
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view);
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }

    protected function layoutContent()
    {
        ob_start();
            include_once __DIR__."/../../views/layouts/app.php";
        return ob_get_clean();
    }
   
    protected function renderOnlyView($view) 
    {
        ob_start();
            include_once __DIR__."/../../views/$view.php";
        return ob_get_clean();
    }

    public function __destruct()
    {
        $this->resolve();
    }
}
