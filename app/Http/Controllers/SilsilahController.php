<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class SilsilahController extends Controller
{
    static function tampilkan_orang($id,$parent_id){
        $orang = Person::where([
            'id'            => $id,
            'orang_tua_id'  => $parent_id
        ])->first();
        if (count($orang) == 0){
            return "People Not Found!";
        }
        $nama_pasangan = '';
        if ($orang->pasangan_id != null){
            $nama_pasangan = ' & '.Person::get_nama_pasangan_by_pasangan_id($orang->pasangan_id);
        }
        return '<ul><li><a href="#">'.$orang->nama_depan.' '.$orang->nama_belakang.$nama_pasangan.'</a>'.self::tampilkan_anak_orang($id).'</li></ul>';
    }

    static function tampilkan_anak_orang($parent_id){
        $childern = Person::where('orang_tua_id',$parent_id)->whereNotIn('id',[$parent_id])->get();
        $str = '<ul>';
        if (count($childern) > 0){
            foreach ($childern as $data){
                $nama_pasangan = '';
                if ($data->pasangan_id != null){
                    $nama_pasangan = ' & '.Person::get_nama_pasangan_by_pasangan_id($data->pasangan_id);
                }
                $str = $str.'<li><a href="#">'.$data->nama_depan.' '.$data->nama_belakang.$nama_pasangan.'</a>'.self::tampilkan_anak_orang($data->id).'</li>';
            }
            return $str.'</ul>';
        }else{
            return '';
        }
    }

    public function index()
    {
    	return view('silsilah/index');
    }
}



