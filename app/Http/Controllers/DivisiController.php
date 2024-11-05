<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = divisi::all();
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
            'manager_id'=>'required',
            'lead_id'=>'required',
        ]);

        divisi::create($validate);
        
        $all = divisi::all();
        return response()->json($all);
    }

    /**
     * Display the specified resource.
     */
    public function show(divisi $divisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(divisi $divisi)
    {
        //
    }
}
