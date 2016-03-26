<?php 

namespace Sharad\Rajeev\Commands;
use Illuminate\Console\Command;
use Config;

class TestCommand extends Command {

    protected $name = 'rajeev:testcommand';

    protected $description = 'Nice description of my command.';
    public function __construct()
	{
		parent::__construct();
	}

    public function fire()
    {   
        $value = Config::get('rajeev::enabled');
        $this->line("Config was $value");
        Config::set('rajeev::enabled', true);
        $value = Config::get('rajeev::enabled');
        $this->line("Config is $value");
    }

}