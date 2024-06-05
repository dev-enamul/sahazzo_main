<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;

class CounterController extends Controller
{
    public function counter()
    {
        $counters = Counter::all();
        return view('counter.index', compact('counters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string',
            'value' => 'required|string',
        ]);

        Counter::create($request->all());

        return redirect()->route('counter')->with('success', 'Counter created successfully.');
    }

    public function edit($id)
    {
        $counter = Counter::findOrFail($id);
        return view('counter.edit', compact('counter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|string',
            'title' => 'required|string',
            'value' => 'required|string',
        ]);

        $counter = Counter::findOrFail($id);
        $counter->update($request->all());

        return redirect()->route('counter')->with('success', 'Counter updated successfully.');
    }

    public function delete($id)
    {
        $counter = Counter::findOrFail($id);
        $counter->delete();

        return redirect()->route('counter')->with('success', 'Counter deleted successfully.');
    }
}
