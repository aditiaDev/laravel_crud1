<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PertanyaanModel;
date_default_timezone_set("Asia/Bangkok");

class PertanyaanController extends Controller
{
    public function index(){
        $data = PertanyaanModel::get_all();
        //dd($data);
        return view('contents.pertanyaan', compact('data'));
    }

    public function create(Request $request){
        
        $request->request->add(["created_date"=> Carbon::now(),"modified_date"=> Carbon::now()]);
        $params = $request->all();
        unset($params['_token']);
        //dd($request->all());
        $data = PertanyaanModel::create($params);
        if($data){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $data = PertanyaanModel::get_by_id($id);
        $data_pertanyaan = json_decode(json_encode($data[0]), true);
        //dd($data);
        return view('contents.dtlpertanyaan', compact('data','data_pertanyaan'));
    }

    public function update($id, Request $request){
        $request->request->add(["modified_date"=> Carbon::now()]);
        $params = $request->all();
        $data = PertanyaanModel::update($id, $params);
        return redirect('/pertanyaan');
    }

    public function delete($id){
        $data = PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }
    
    public function getData_by_id($id){
        $data = PertanyaanModel::getPertanyaan_by_id($id);

        return json_encode($data[0]);
    }
}
