<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id_pertanyaan){
        $pertanyaan = PertanyaanModel::get_with_id($id_pertanyaan);
        $jawaban = JawabanModel::get_with_id($id_pertanyaan);

        return view('list_jawaban', ['pertanyaan' => $pertanyaan, 'jawaban' => $jawaban->reverse()]);
    }

    public function store(Request $request){
        $save = JawabanModel::insert($request);

        return redirect()->back();
    }
}
