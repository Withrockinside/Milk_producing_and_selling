<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmController extends Controller
{

    public function index()
    {
        $farms =Farm::get();

        return view('farms.index', compact('farms'));
    }

    public function create()
    {
        return view('farms.create');
    }

    public function store(Request $request)
    {
        Farm::create($request->all());

        return redirect('/farms')->with('completed', 'farm has been saved!');
    }

    public function show(Farm $farm)
    {
        $cows = $farm->cows;

        return view('farms.show', compact('farm', 'cows'));
    }

    public function edit(Farm $farm)
    {
        return view('farms.edit', compact('farm'));
    }

    public function update(Request $request, Farm $farm)
    {
        $farm->update([
            'name' => $request->name,
            ]);
        return redirect('/farms')->with('completed', 'farm has been updated');
    }

    public function destroy(Farm $farm)
    {
        $farm->delete();

        return redirect('/farms')->with('completed', 'farm has been deleted');
    }
}
