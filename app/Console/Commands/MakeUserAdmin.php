<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:makeAdmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rendi un utente amministratore';

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
     * @return mixed
     */
    public function handle()
    {
        $email = $this->ask("please insert the email of user that has to become admin");
        $user = \App\User::where('email', $email)->first();
        $user->makeAdmin();
        $this->info("$email is now admin");
    }
}
