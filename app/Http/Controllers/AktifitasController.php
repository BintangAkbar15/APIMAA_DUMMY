<?php

namespace App\Http\Controllers;

use App\Models\aktifitas;
use Illuminate\Http\Request;

class AktifitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = aktifitas::all();
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
            'fullname'=>'required|string|min:4',
            'telp'=>'required|number|regex:/^08\d{10,15}$/',
            'email'=>'required|email|unique:aktifitas',
            'date_of_birth'=>'required',
            'education'=>'required',
            'is_married'=>'required',
            'address'=>'required',
            'nik'=>'required',
            'timezone'=>'required',
        ]);

        aktifitas::create($validate);
        
        $all = aktifitas::all();
        return response()->json($all);
    }

    /**
     * Display the specified resource.
     */
    public function show(aktifitas $aktifitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aktifitas $aktifitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, aktifitas $aktifitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aktifitas $aktifitas)
    {
        //
    }
}
