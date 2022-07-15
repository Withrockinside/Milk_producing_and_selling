<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmCowController extends Controller
{
    public function create(Farm $farm)
    {
        return view('cows.create', compact('farm'));
    }

    public function store(Request $request, Farm $farm)
    {
        $farm->cows()->create($request->all());

        return redirect()->route('farms.show', $farm);
    }

    public function show(Farm $farm, Cow $cow)
    {
        return view('cows.show', compact('farm', 'cow'));
    }

    public function edit(Farm $farm, Cow $cow)
    {
        return view('cows.edit', compact('cow', 'farm'));
    }

    public function update(Request $request, Farm $farm, Cow $cow)
    {
        $cow->update([
            'name' => $request->name,
            'date_of_birth' => $request->date_of_birth,
            'farm_id' => $farm->id,
            ]);
        return redirect()->route('farms.show', $farm);
    }

    public function destroy(Farm $farm, Cow $cow)
    {
        $cow->delete();

        return redirect()->route('farms.show', $farm);
    }
}
