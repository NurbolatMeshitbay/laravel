<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Http\Response
     */

    public function welcome(){
        return view('welcome');
    }

    public function index()
    {
        $data = Test::all();

        return view('product.index')->with('data',$data);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $valid  = $request->validate([
            'SKU' => 'required',
            'Name' => 'required',
            'Price' => 'required|integer',
        ]);

        $data = new Test();
        $data->SKU = $request->input('SKU');
        $data->Name = $request->input('Name');
        $data->Price = $request->input('Price');
        $data->save();

        $status = sprintf('Row successfully added with id %s!', $data->getAttribute('id'));

        return redirect()->route('product.create')->with('status', $status ?? '');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*  $destroy = Test::all();*/
    }
}
