<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master;

class MasterController extends Controller
{
    //
    public function index() {
        $masters = Master::paginate(10);
        // dd($tests->toArray());
        return view('masters.index')->with('masters', $masters);
    }

    public function edit() {
        return view('masters.edit');
    }

    public function confirm(Request $request) {
        
        $masters = $request->all();
        if (isset($masters['prefecture_CD'])) {
            $masters['prefecture_CD'] = sprintf('%02d', $masters['prefecture_CD']);
        }
        if (isset($masters['prefectureName'])) {
            $masters['prefectureName'] = mb_convert_kana($masters['prefectureName'], 'RNASKHCV', 'UTF-8');
        }
        // dd($masters, $request);
        

        $this->validate($request, [
            'prefecture_CD' => 'required|numeric|unique:masters',
            'prefectureName' => 'required'
        ]);
        
        return view('masters.confirm', compact('masters'));
    }

    public function store(Request $request) {
        
        $master = new Master();
        $master->prefecture_cd = $request->prefecture_CD;
        $master->prefecture_name = $request->prefectureName;
        $master->insert_date = now();
        $master->insert_cd = '01';
        $master->update_date = now();
        $master->update_cd = '01';
        $master->delete_date = '0000-01-01';
        $master->delete_cd = '01';
        $master->delete_flg = '0';
        $master->save();
        return redirect('/');
    }

    public function destroy(Request $request) {
        // dd($request->btnDelete);
        $master = Master::where('prefecture_cd', '$request->btnDelete')->first();
        $master->delete();
        return redirect('/');
    }
}