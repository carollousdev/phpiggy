<?php

#framework

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    private function normalizePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2.}#', '/', $path);
        return $path;
    }

    public function add(string $method, string $path, array $controller)
    {
        $this->routes[] = [
            'path' => $this->normalizePath($path),
            'method' => strtoupper($method),
            'controller' => $controller
        ];
    }
}
