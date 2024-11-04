<?php

declare(strict_types=1);

use Framework\TemplateEngine;
use App\Config\paths;

return [
    TemplateEngine::class => fn() => new TemplateEngine(paths::VIEW),
];
