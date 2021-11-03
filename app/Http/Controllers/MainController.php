<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\TestModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

   public function index() {
        return view('list'); }

/*
    public function create() {
        return view('add');
    }*/


    public function store(Request $request) {
        $valid  = $request->validate([
            'SKU' => 'required',
            'Name' => 'required',
            'Price' => 'required'
        ]);

        $data = new Test();
        $data->SKU = $request->input('SKU');
        $data->Name = $request->input('Name');
        $data->Price = $request->input('Price');
        $data->save();

        return redirect()-route('/add');
    }
}
