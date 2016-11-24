<?php

namespace Pharaoh\Component\Console;

use Symfony\Component\Console\Application as BaseApplication;

class Application extends BaseApplication
{

    const VERSION = '@git_version@';

    public function __construct()
    {
        parent::__construct('Pharaoh', self::VERSION);
    }
}
