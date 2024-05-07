<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertySubmitRequest;
use App\Models\Feature;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('property.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $features = Feature::all();
        return view('property.create', ['features' => $features, 'types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertySubmitRequest $request)
    {
        $property = new Property();
        $property->title = $request->title;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
