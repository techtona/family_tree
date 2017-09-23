<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = \App\User::first();

        $person = new \App\Person();
        $person->updated_by = $user->id;
        $person->orang_tua_id = 1;
        $person->nama_depan = 'John';
        $person->nama_belakang = 'Doe';
        $person->jenis_kelamin = rand(0, 1) ? 'L' : 'P';
        $person->tanggal_lahir = date('Y-m-d', strtotime( '+'.mt_rand(0,31).' days'));
        $person->save();

        $person = new \App\Person();
        $person->updated_by = $user->id;
        $person->orang_tua_id = 1;
        $person->nama_depan = 'Frank';
        $person->nama_belakang = 'Doe';
        $person->jenis_kelamin = rand(0, 1) ? 'L' : 'P';
        $person->tanggal_lahir = date('Y-m-d', strtotime( '+'.mt_rand(0,31).' days'));
        $person->save();

        $person = new \App\Person();
        $person->updated_by = $user->id;
        $person->orang_tua_id = 1;
        $person->nama_depan = 'Ike';
        $person->nama_belakang = 'Doe';
        $person->jenis_kelamin = rand(0, 1) ? 'L' : 'P';
        $person->tanggal_lahir = date('Y-m-d', strtotime( '+'.mt_rand(0,31).' days'));
        $person->save();
    }
}
