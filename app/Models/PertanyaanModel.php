<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all() {
        $pertanyaan = DB::table('pertanyaan')->get();

        return $pertanyaan;
    }

    public static function get_with_id($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->get();

        return $pertanyaan;
    }

    public static function insert($data){
        $timestamp = date('Y-m-d H:i:s', time());
        $new_insert = DB::table('pertanyaan')->insert([
            'judul'=>$data->judul,
            'isi'=>$data->isi,
            'created_at'=>$timestamp,
            'updated_at'=>$timestamp
        ]);

        return $new_insert;
    }

    public static function insert_seed(){
        $timestamp = date('Y-m-d H:i:s', time());
        $insert = DB::table('pertanyaan')->insert([
            'judul'=>'Ini adalah judul pertanyaan',
            'isi'=>'Ini adalah isi dari pertanyaan',
            'created_at'=>$timestamp,
            'updated_at'=>$timestamp
        ]);

        return $insert;
    }
}

?>
