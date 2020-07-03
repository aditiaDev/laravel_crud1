<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel{
    public static function get_all(){
        $data = DB::table('pertanyaan')->get();
        return $data;
    }

    public static function create($params){
        $data = DB::table('pertanyaan')->insert($params);
        return $data;
    }
}
