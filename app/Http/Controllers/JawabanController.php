<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\JawabanModel;

class JawabanController extends Controller
{
    public function index($id){
        $data = JawabanModel::get_byid($id);
        //dd($data);
        return view('contents.jawaban', compact('data','id'));
    }

    public function create($id, Request $request){
        date_default_timezone_set("Asia/Bangkok");
        $request->request->add(["id_pertanyaan"=>$id, "created_date"=> Carbon::now(),"modified_date"=> Carbon::now()]);
        $params = $request->all();
        unset($params['_token']);
        //dd($params);
        $data = JawabanModel::create($params);
        if($data){
            return redirect('/jawaban/'.$id);
        }
    }
}
