<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\paths;

class AboutController
{

    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(paths::VIEW);
    }

    public function About()
    {
        $title = 'About';
        echo $this->view->render('About.php', [
            'title' => $title,
        ]);
    }
}
