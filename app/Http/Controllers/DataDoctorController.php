<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\Storedata_doctorRequest;
use App\Http\Requests\Updatedata_doctorRequest;

class DataDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storedata_doctorRequest $request)
    {
        // $table->string('no_str');
        //     $table->primary('no_str');
        //     $table->string('nama');
        //     $table->string('phone');
        //     $table->string('email');
        //     $table->string('tempat_praktik');
        //     $table->string('Alamat');
        //     $table->timestamps();
        $this->validate($request,[
            'no_str'=> 'required',
            'nama'=> 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'tempat_praktik'=> 'required',
            'alamat'=> 'required'

        ]);
        $doc = new Doctor;
        $doc->no_str = $request->input('no_str');
        $doc->nama = $request->input('nama');
        $doc->phone = $request->input('phone');
        $doc->email = $request->input('email');
        $doc->tempat_praktik = $request->input('tempat_praktik');
        $doc->alamat = $request->input('alamat');

        $doc->save();
        return redirect('/admin/doctordata')->with('success','Data Saved');

    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $data_doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $data_doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatedata_doctorRequest $request, Doctor $data_doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $data_doctor)
    {
        //
    }
}
