<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class TraitMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:trait {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dani creates this trait . . .';

    protected $type = 'Trait';
    protected function getStub()
    {
        return __DIR__ . '/stubs/trait.stub';
    }
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Traits';
    }

    /**
     * Create a new command instance.
     *
     * @return void
     */
   

    /**
     * Execute the console command.
     *
     * @return int
     */
  
}
