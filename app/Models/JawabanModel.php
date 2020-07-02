<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_with_id($id_pertanyaan){
        $jawaban = DB::table('jawaban')->where('id_pertanyaan', $id_pertanyaan)->get();

        return $jawaban;
    }

    public static function insert($data){
        $timestamp = date('Y-m-d H:i:s', time());
        $new_insert = DB::table('jawaban')->insert([
            'id_pertanyaan'=>$data->id_pertanyaan,
            'isi'=>$data->isi,
            'created_at'=>$timestamp,
            'updated_at'=>$timestamp
        ]);

        return $new_insert;
    }
}
