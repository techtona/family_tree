<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = new \App\User();
        $person->name = 'sample person';
        $person->email= 'sample@person.com';
        $person->password = \Illuminate\Support\Facades\Hash::make('terimakasih');
        $person->save();
    }
}
