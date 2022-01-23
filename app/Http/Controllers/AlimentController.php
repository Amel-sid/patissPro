<?php

namespace App\Http\Controllers;

use App\Models\Aliment;
use Illuminate\Http\Request;

class AlimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list = Aliment::all();

        return view('aliments.list',['aliments'=>$list]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $validated = $request->validate([
            'title' => 'required|max:255',
            'quantity' => 'required',
            'price' => 'required',
        ]);

        $aliment = new Aliment;
        $aliment->name = $request->title;
        $aliment->qte= $request->quantity;
        $aliment->price= $request->price;
        $aliment->magasin = $request->shop;
        $aliment->save();

        return redirect('list-aliments
        ')->with('status', 'un aliment vient d\'être ajouté ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        //
        $aliment = Aliment::find($request->id);
        $aliment->name = $request->title;
        $aliment->price = $request->price;
        $aliment->qte = $request->quantity;
        $aliment->magasin = $request->shop;
        $aliment->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
