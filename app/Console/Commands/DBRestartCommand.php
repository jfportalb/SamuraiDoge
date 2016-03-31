<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use Symfony\Component\Console\Input\InputOption;

class DBRestartCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:restart';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the application database based on config';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->call('db:drop');
        $this->call('db:start');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            //array('example', InputArgument::REQUIRED, 'An example argument.'),
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['no-migrate', 'nm', InputOption::VALUE_NONE, 'Don\'t call migrate.'],
            ['no-seed', 'ns', InputOption::VALUE_NONE, 'Don\'t call seed.'],
        ];
    }

}