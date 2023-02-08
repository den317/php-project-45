<?php

namespace BrainGames\Cli;

// phpcs:disable
require_once __DIR__ . '/../vendor/autoload.php';
// phpcs:enable

use function cli\line;
use function cli\prompt;

function welcome()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
