<?php

namespace App\Http\Controllers;

use App\Models\Aitool;
use App\Models\Category;
use Illuminate\Http\Request;

class AitoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aitools = Aitool::all();
        return view('aitools.index', compact('aitools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('aitools.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hasFreePlan = $request->has('hasFreePlan');
        if ($hasFreePlan) {
            $request->merge(['hasFreePlan' => true]);
        }

        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:10',
            'link' => 'required|url',
            'hasFreePlan' => 'boolean',
            'price' => 'nullable|numeric',
        ]);

        Aitool::create($request->all());
        return redirect()->route('aitools.index')->with('success', 'Az ia eszköz sikeresen mentve!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aitool = Aitool::find($id);
        return view('aitools.show', compact('aitool'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::all();
        $aitool = Aitool::find($id);
        return view('aitools.edit', compact('aitool', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $hasFreePlan = $request->has('hasFreePlan');
        if ($hasFreePlan) {
            $request->merge(['hasFreePlan' => true]);
        }
        else {
            $request->merge(['hasFreePlan' => false]);
        }

        $request->validate([
            'name' => 'required|string|max:255|min:3',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:10',
            'link' => 'required|url',
            'hasFreePlan' => 'boolean',
            'price' => 'nullable|numeric',
        ]);

        $aitools = Aitool::findOrFail($id);
        $aitools->update($request->all());
        return redirect()->route('aitools.index')->with('success', 'Az Ai eszköz sikeresen módosítva.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aitools = Aitool::find($id);
        $aitools->delete();

        return redirect()->route('aitools.index')->with('success', 'Az AI eszköz sikeresen törölve.');
    }
}
