<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foodsByCategory = Food::all()->groupBy('category');
        return view('food.index', compact('foodsByCategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(\App\Http\Requests\FoodRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image_file')) {
            $path = $request->file('image_file')->store('public/images');
            $data['image'] = \Illuminate\Support\Facades\Storage::url($path);
        }

        Food::create($data);

        return redirect()->route('foods.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        return view('food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
