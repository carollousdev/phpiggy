<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\paths;

class HomeController
{

    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(paths::VIEW);
    }

    public function Home()
    {
        $secret = "Welcome to PHP8";
        $this->view->render('/index.php');
    }
}
