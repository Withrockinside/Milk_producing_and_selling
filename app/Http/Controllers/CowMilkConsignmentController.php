<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Farm;
use App\Models\MilkConsignment;
use Illuminate\Http\Request;

class CowMilkConsignmentController extends Controller
{

    public function create(Farm $farm, Cow $cow)
    {
        return view('milkConsignments.create', compact('farm', 'cow'));
    }

    public function store(Request $request, Farm $farm, Cow $cow)
    {
        $cow->milkConsignments()->create($request->all());

        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }

    public function show(Farm $farm, Cow $cow, MilkConsignment $milkConsignment)
    {
        return view('milkConsignments.show', compact('farm', 'cow', 'milkConsignment'));
    }

    public function edit(Farm $farm, Cow $cow, MilkConsignment $milkConsignment)
    {
        return view('milkConsignments.edit', compact('farm', 'cow', 'milkConsignment'));
    }

    public function update(Request $request, Farm $farm, Cow $cow, MilkConsignment $milkConsignment)
    {
        $milkConsignment->update([
            'date' => $request->date,
            ]);
        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }

    public function destroy(Farm $farm, Cow $cow, MilkConsignment $milkConsignment)
    {
        $milkConsignment->delete();

        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }
}
