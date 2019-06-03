<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Mst_prefecture;
use App\Master;

class MasterController extends Controller
{
    //
    public function index() {
        // $msts = Mst_prefecture::All();
        $masters = Master::All();
        // dd($tests->toArray());
        return view('masters.index')->with('masters', $masters);
    }
    public function edit() {
        return view('masters.edit');
    }
    public function store(Request $request) {
        $masters = Request::all();
        return view('masters.confirm', compact('masters'));
    }
}
