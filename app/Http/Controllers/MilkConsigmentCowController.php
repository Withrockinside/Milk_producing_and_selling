<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\MilkConsignment;
use Illuminate\Http\Request;

class MilkConsigmentCowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('milkConsigmentCows.index', compact('milkConsigment', 'Cow'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('milkConsigmentCows.create', compact('milkConsigment', 'Cow'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $milkConsigment =MilkConsignment::create($request->all());
        return redirect('/milkConsigmentCows')->with('completed', 'milkConsigmentCows has been saved!');
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
        $milkConsigment =MilkConsignment::findOrFail($id);
        return view('milkConsigmentCows.edit', compact('milkConsigment'));
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
        MilkConsignment::whereId($id)->update([
            'date' => $request->date,
            ]);
        return redirect('/milkConsigments')->with('completed', 'milkConsigment has been updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $milkConsigment =MilkConsignment::findOrFail($id);
        $milkConsigment->delete();
        return redirect('/milkConsigments')->with('completed', 'milkConsigment has been deleted');
    }
}
