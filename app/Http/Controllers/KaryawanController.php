<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = karyawan::all();
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
            'email'=>'required|email|unique:karyawan',
            'date_of_birth'=>'required',
            'education'=>'required',
            'is_married'=>'required',
            'address'=>'required',
            'nik'=>'required',
            'timezone'=>'required',
        ]);

        karyawan::create($validate);
        
        $all = karyawan::all();
        return response()->json($all);
    }

    /**
     * Display the specified resource.
     */
    public function show(karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(karyawan $karyawan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, karyawan $karyawan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(karyawan $karyawan)
    {
        //
    }
}
