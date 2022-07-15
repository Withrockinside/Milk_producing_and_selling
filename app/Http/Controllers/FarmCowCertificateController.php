<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Cow;
use App\Models\Farm;
use Illuminate\Http\Request;

class FarmCowCertificateController extends Controller
{
    public function create(Farm $farm, Cow $cow)
    {
        return view('certificates.create', compact('farm', 'cow'));
    }

    public function store(Request $request, Farm $farm, Cow $cow)
    {
        $cow->certificate()->create($request->all());

        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }

    public function show(Farm $farm, Cow $cow, Certificate $certificate)
    {

        return view('certificates.show', compact('farm', 'cow','certificate'));
    }

    public function edit(Farm $farm, Cow $cow, Certificate $certificate)
    {
        return view('certificates.edit', compact('farm', 'cow', 'certificate'));
    }

    public function update(Request $request, Farm $farm, Cow $cow, Certificate $certificate)
    {
        $certificate->update([
            'date' => $request->date,
            'result' => $request->result,
            ]);
        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }

    public function destroy(Farm $farm, Cow $cow, Certificate $certificate)
    {
        $certificate->delete();

        return redirect()->route('farms.cows.show', [$farm->id, $cow->id]);
    }
}
