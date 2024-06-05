<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuickLink;

class QuickLinkController extends Controller
{
    public function index()
    {
        $quickLink = QuickLink::first();
        return view('quick_link.index', compact('quickLink'));
    }

    public function edit()
    {
        $quickLink = QuickLink::first();
        return view('quick_link.edit', compact('quickLink'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string',
            'subtitle' => 'nullable|string',
            'btn_text' => 'nullable|string',
            'btn_link' => 'nullable|string',
        ]);

        $quickLink = QuickLink::first();
        $quickLink->update($request->all());

        return redirect()->route('link')->with('success', 'Quick link updated successfully.');
    }
}
