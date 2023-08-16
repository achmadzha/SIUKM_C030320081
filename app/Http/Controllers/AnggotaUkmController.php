<?php

namespace App\Http\Controllers;

use App\Models\AnggotaUkm;
use App\Models\Mahasiswa;
use App\Models\Ukm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AnggotaUkmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = AnggotaUkm::get();
        return view('anggota_ukm.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $ukm = Ukm::all();
        return view('anggota_ukm.create', compact(['mahasiswa','ukm']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'id_mahasiswa'        => 'required',
            'id_ukm'              => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['id_mahasiswa']       = $request->id_mahasiswa;
        $data['id_ukm']             = $request->id_ukm;

        AnggotaUkm::create($data);

        $data = AnggotaUkm::get(); 
        return view('anggota_ukm.index',compact(('data')));
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
        $mahasiswa = Mahasiswa::all();
        $ukm = Ukm::all();;
        $data = AnggotaUkm::findOrFail($id);
        return view('anggota_ukm.edit', compact('data','mahasiswa','ukm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'id_mahasiswa'        => 'required',
            'id_ukm'              => 'required',
        ]);

        //jika validasi gagal, balik ke halaman sebelumnya dan tampilkan error
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['id_mahasiswa']       = $request->id_mahasiswa;
        $data['id_ukm']             = $request->id_ukm;

        AnggotaUkm::whereId($id)->update($data);

        $data = AnggotaUkm::get(); 
        return view('anggota_ukm.index',compact(('data')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = AnggotaUkm::findOrFail($id);

        if($data)
        {
            $data->delete();
        }

        $data = AnggotaUkm::get();
        return view('anggota_ukm.index', compact('data'));
    }
}
