<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $data_pertanyaan = PertanyaanModel::get_all();

        return view('pertanyaan', ['data' => $data_pertanyaan]);
    }

    public function create(){
        return view('form_pertanyaan');
    }

    public function store(Request $request){
        $save = PertanyaanModel::insert($request);

        return redirect('/pertanyaan');
    }

    public function detail($id){
        $data_pertanyaan = PertanyaanModel::get_with_id($id);
        $data_jawaban = JawabanModel::get_with_id($id);

        return view('detail_pertanyaan', ['pertanyaan' => $data_pertanyaan, 'jawaban' => $data_jawaban]);
    }

    public function edit($id){
        $data_pertanyaan = PertanyaanModel::get_with_id($id);

        return view('form_edit_pertanyaan', ['pertanyaan' => $data_pertanyaan]);
    }

    public function update(Request $request){
        PertanyaanModel::update($request);

        return redirect(route('pertanyaan_detail', ['id' => $request->id]));
    }

    public function delete($id){
        PertanyaanModel::delete($id);

        return redirect('/pertanyaan');
    }
}
