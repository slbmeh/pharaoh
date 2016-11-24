<?php
declare(strict_types=1);

namespace Pharaoh\Component\Console;

use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Application extends BaseApplication
{

    const VERSION = '@git_version@';

    private $booted = false;

    public function __construct()
    {
        parent::__construct('Pharaoh', self::VERSION);
    }

    /**
     * {@inheritdoc}
     */
    public function run(InputInterface $input = null, OutputInterface $output = null)
    {
        if (false === $this->booted) {
            $this->boot();
        }

        return parent::run($input, $output);
    }

    public function isBooted(): bool
    {
        return (bool) $this->booted;
    }

    protected function boot()
    {
        $this->initializeContainer();

        $this->booted = true;
    }

    private function initializeContainer()
    {
    }
}
