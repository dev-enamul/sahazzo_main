<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = ServiceCategory::all();
        return view('service.category.service_category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.category.service_category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new ServiceCategory();
        ServiceCategory::create([
            'title' => $request->title,
            'slug' => getSlug($model,$request->title),
        ]);

        return redirect()->route('service.category')->with('success', "Service Category Created");
    }
 
    public function edit(string $id)
    {
        $data = ServiceCategory::find($id);
        return view('service.category.service_category_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = ServiceCategory::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect()->route('service.category')->with('Service Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = ServiceCategory::find($id);
        $category->delete();
        return redirect()->route('service.category')->with('Service Category Deleted');
    }
}
