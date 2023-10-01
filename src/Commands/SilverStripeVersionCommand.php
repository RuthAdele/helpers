<?php

namespace Goldfinch\Helpers\Commands;

use Composer\InstalledVersions;
use SilverStripe\Admin\LeftAndMain;
use Goldfinch\Taz\Services\InputOutput;
use Goldfinch\Taz\Console\GeneratorCommand;
use Symfony\Component\Console\Command\Command;
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

#[AsCommand(name: 'app:ss-version')]
class SilverStripeVersionCommand extends GeneratorCommand
{
    protected static $defaultName = 'app:ss-version';

    protected $description = 'Get SilverStripe version';

    protected function execute($input, $output): int
    {
        // parent::execute($input, $output);

        $version = InstalledVersions::getVersion('silverstripe/recipe-cms');

        $io = new InputOutput($input, $output);
        $io->text($version);

        return Command::SUCCESS;
    }
}
