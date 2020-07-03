<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index(){
        $data = PertanyaanModel::get_all();
        //dd($data);
        return view('contents.pertanyaan', compact('data'));
    }

    public function create(Request $request){
        date_default_timezone_set("Asia/Bangkok");
        $request->request->add(["created_date"=> Carbon::now(),"modified_date"=> Carbon::now()]);
        $params = $request->all();
        unset($params['_token']);
        //dd($request->all());
        $data = PertanyaanModel::create($params);
        if($data){
            return redirect('/pertanyaan');
        }
    }
}
