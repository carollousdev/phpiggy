<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\paths;

class AboutController
{

    public function __construct(private TemplateEngine $view) {}

    public function About()
    {
        $title = 'About';
        echo $this->view->render('About.php', [
            'title' => $title,
        ]);
    }
}
