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

    public static function get_by_id($id){
        $data = DB::table('pertanyaan as A')
                ->leftjoin('jawaban as B', 'A.id', '=', 'B.id_pertanyaan')
                ->select('A.judul as judul' , 'A.isi as isi' , 'A.created_date as created_date' , 'A.modified_date as modified_date' , 'B.isi as jawaban_isi', 'B.created_date as jawaban_date')
                ->where('A.id',$id)
                ->orderBy('B.created_date', 'desc')
                ->get();
        return $data;
    }

    public static function update($id, $params){
        $data = DB::table('pertanyaan')
                ->where('id',$id)
                ->update([
                    'judul' => $params['edit_judul'],
                    'isi' => $params['edit_isi'],
                    'modified_date' => $params['modified_date']
                ]);
        
        return $data;
    }

    public static function delete($id){
        $data = DB::table('pertanyaan')
                    ->where('id',$id)
                    ->delete();

        return $data;
    }

    public static function getPertanyaan_by_id($id){
        $data = DB::table('pertanyaan')->where('id',$id)->get();
        return $data;
    }
}
