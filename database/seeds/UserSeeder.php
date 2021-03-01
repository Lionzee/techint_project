<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John Stone',
            'email' => 'jstone@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Ponnappa Priya',
            'email' => 'ppriya@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Mia Wong',
            'email' => 'miawong@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Peter Stanbridge',
            'email' => 'pstanbridge@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Natalie Lee-Walsh',
            'email' => 'natwalsh@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Ang Li',
            'email' => 'liang@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Nguta Ithya',
            'email' => 'ngunyah@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Tamzyn French',
            'email' => 'tafrench@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);


        User::create([
            'name' => 'Salome Simoes',
            'email' => 'ssimoes@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Trevor Virtue',
            'email' => 'tvirtue@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);


        User::create([
            'name' => 'Tarryn Campbell-Gillies',
            'email' => 'tcallies@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Eugenia Anders',
            'email' => 'eunder@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Andrew Kazantzis',
            'email' => 'akazantzis@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Verona Blair',
            'email' => 'vblair@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);

        User::create([
            'name' => 'Jane Meldrum',
            'email' => 'jedrum@email.com',
            'password' => Hash::make('password'),
            'email_verified_at' => Carbon::now(),
        ]);



    }
}
