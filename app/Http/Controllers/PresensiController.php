<?php

namespace App\Http\Controllers;

use App\Models\presensi;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = presensi::all();
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
            'karyawan_id'=>'required',
            'photo'=>'required',
            'in'=>'required',
            'out'=>'required',
            'status'=>'required',
            'out_range_reason'=>'required'
        ]);

        presensi::create($validate);
        
        $all = presensi::all();
        return response()->json($all);
    }

    /**
     * Display the specified resource.
     */
    public function show(presensi $presensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, presensi $presensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(presensi $presensi)
    {
        //
    }
}
