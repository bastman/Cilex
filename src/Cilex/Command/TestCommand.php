<?php
/**
 * Created by JetBrains PhpStorm.
 * User: seb
 * Date: 11/22/12
 * Time: 12:25 PM
 * To change this template use File | Settings | File Templates.
 */



namespace Cilex\Command;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Example command for testing purposes.
 */
class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:test')
            ->setDescription('test someone')
            ->addArgument('name', InputArgument::OPTIONAL, 'Who do you want to greet?')
            ->addOption('yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = 'Hello';
        $name = $input->getArgument('name');
        if ($name) {
            $text .= ' '.$name;
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
