<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caracteristic;
class CaracteristicController extends Controller
{
    public function caracteristic()
    {
        $caracteristics = Caracteristic::all();
        return view('caracteristic.index', compact('caracteristics'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'nullable|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Caracteristic::create($request->all());

        return redirect()->route('caracteristic')->with('success', 'Characteristic created successfully.');
    }

    public function edit($id)
    {
        $caracteristic = Caracteristic::findOrFail($id);
        return view('caracteristic.edit', compact('caracteristic'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'nullable|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $caracteristic = Caracteristic::findOrFail($id);
        $caracteristic->update($request->all());

        return redirect()->route('caracteristic')->with('success', 'Characteristic updated successfully.');
    }

    public function delete($id)
    {
        $caracteristic = Caracteristic::findOrFail($id);
        $caracteristic->delete();

        return redirect()->route('caracteristic')->with('success', 'Characteristic deleted successfully.');
    }
}
