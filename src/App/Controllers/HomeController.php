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
        echo $this->view->render("Index.php");
    }
}
