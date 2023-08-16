<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa_count = Mahasiswa::count();

        $data = Mahasiswa::get();
        return view('mahasiswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nim'               => 'required',
            'nama'              => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nim']                = $request->nim;
        $data['nama']               = $request->nama;
        $data['tanggal_lahir']      = $request->tanggal_lahir;
        $data['alamat']             = $request->alamat;

        Mahasiswa::create($data);

        $data = Mahasiswa::get(); 
        return view('mahasiswa.index',compact(('data')));
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
        $data = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'nim'               => 'required',
            'nama'              => 'required',
            'tanggal_lahir'     => 'required',
            'alamat'            => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['nim']                = $request->nim;
        $data['nama']               = $request->nama;
        $data['tanggal_lahir']      = $request->tanggal_lahir;
        $data['alamat']             = $request->alamat;

        Mahasiswa::whereId($id)->update($data);

        $data = Mahasiswa::get(); 
        return view('mahasiswa.index',compact(('data')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Mahasiswa::findOrFail($id);

        if($data)
        {
            $data->delete();
        }

        $data = Mahasiswa::get();
        return view('mahasiswa.index', compact('data'));
    }
}
