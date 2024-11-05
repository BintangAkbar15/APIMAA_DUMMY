<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = level::all();
        return response()->json($all);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required|string|min:4',
        ]);

        level::create($validate);
        
        $all = level::all();
        return response()->json($all);
    }

    /**
     * Display the specified resource.
     */
    public function show(level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(level $level)
    {
        //
    }
}
