<?php

namespace App\Command;

use App\Services\Service;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'foo')]
class FooCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $service = new Service(null);

        return 0;
    }
}
