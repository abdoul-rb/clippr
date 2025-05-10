<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateUser extends Command
{
    protected $signature = 'user:create {--email=} {--name=} {--password=}';
    protected $description = 'Créer un nouvel utilisateur';

    public function handle()
    {   
        $email = $this->option('email');
        $name = $this->option('name');
        $password = $this->option('password');

        if (! $email) {
            $email = $this->ask('What is your Email?');
        }

        if (! $name) {
            $name = $this->ask('What is your Name?');
        }

        if (! $password) {
            $password = $this->secret('What is your Password?');
        }

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $user->markEmailAsVerified();

        $this->info("Utilisateur créé avec succès !");

        return Command::SUCCESS;
    }
}