<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_byid($id){
        $data = DB::table('jawaban')->where('id_pertanyaan',$id)->get();
        return $data;
    }

    public static function create($params){
        $data = DB::table('jawaban')->insert($params);
        return $data;
    }
}
