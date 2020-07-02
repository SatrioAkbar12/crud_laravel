<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

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
}
