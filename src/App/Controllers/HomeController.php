<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\paths;

class HomeController
{

    public function __construct(private TemplateEngine $view) {}

    public function Home()
    {
        $title = 'Welcome to PHP8';
        echo $this->view->render('Index.php', [
            'title' => $title,
        ]);
    }
}
