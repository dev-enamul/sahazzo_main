<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
class FaqController extends Controller
{
    public function faq()
    {
        $faqs = Faq::all();
        return view('faq.index', compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq')->with('success', 'FAQ created successfully.');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faq.edit', compact('faq'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        $faq = Faq::findOrFail($id);
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return redirect()->route('faq')->with('success', 'FAQ updated successfully.');
    }

    public function delete($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('faq')->with('success', 'FAQ deleted successfully.');
    }
    
}
