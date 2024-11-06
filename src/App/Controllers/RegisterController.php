<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\paths;

class RegisterController
{

    public function __construct(private TemplateEngine $view) {}

    public function Register()
    {
        echo $this->view->render("Register.php", ['title' => "Expense Tracking App"]);
    }
}
