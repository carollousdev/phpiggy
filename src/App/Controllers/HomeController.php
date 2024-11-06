<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class HomeController
{

    public function __construct(private TemplateEngine $view) {}

    public function Home()
    {
        echo $this->view->render("Index.php", ['title' => "Expense Tracking App"]);
    }
}
