<?php

namespace src\Command;

use src\service\FileContentGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PasswordCreatorCommand extends Command
{
    protected function configure()
    {
        $this->setName('pass:go')
//            ->addOption('namespace', '', InputOption::VALUE_REQUIRED, 'The namespace of the password file to create')
//            ->addOption('fileName', '', InputOption::VALUE_REQUIRED, 'The name of file without extensions')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
//        $text = 'all good';
        $fileGenerator = new FileContentGenerator();

        $outText = $fileGenerator->getDataForFile();

        $output->writeln($outText);
    }

}