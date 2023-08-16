<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa_count = Ukm::count();

        $data = Ukm::get();
        return view('ukm.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ukm.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama'          => 'required',
            'deskripsi'     => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['nama']           = $request->nama;
        $data['deskripsi']      = $request->deskripsi;

        Ukm::create($data);

        $data = Ukm::get(); 
        return view('ukm.index',compact(('data')));
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
        $data = Ukm::findOrFail($id);
        return view('ukm.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'nama'          => 'required',
            'deskripsi'     => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $data['nama']           = $request->nama;
        $data['deskripsi']      = $request->deskripsi;

        Ukm::whereId($id)->update($data);

        $data = Ukm::get(); 
        return view('ukm.index',compact(('data')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Ukm::findOrFail($id);

        if($data)
        {
            $data->delete();
        }

        $data = Ukm::get();
        return view('mahasiswa.index', compact('data'));
    }
}
