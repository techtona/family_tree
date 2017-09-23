<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    static function get_nama_pasangan_by_pasangan_id($id){
        $person = Person::where('id',$id)->first();

        return $person->nama_depan.' '.$person->nama_belakang;
    }
}
