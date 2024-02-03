<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $supports){

        $supports = $supports->all();
        

        return view('admin.supports.index', compact('supports'));
    }

    public function create(){
        return view('admin.supports.create');
    }

    public function store(Request $request){
        $data = $request->all();
        $date['status'] = 'a';

        $support = Support::create($data);
        return redirect()->route('supports.index');
    }
}
