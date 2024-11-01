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
        $title = 'Welcome to PHP8';
        echo $this->view->render('/index.php', [
            'title' => $title,
        ]);
    }
}
