<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Listmhs = Mahasiswa::latest()->paginate(5);
        return view('mahasiswa.index', compact('Listmhs'));
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
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Data created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mhs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mhs = Mahasiswa::findOrFail($id);
        return view('mahasiswa.edit', compact('mhs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mhs = Mahasiswa::findorFail($id);
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
        ]);
        $mhs->update($request->all());
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mhs = Mahasiswa::findorFail($id);
        $mhs->delete();
        return redirect()->route('mahasiswa.index')
           ->with('success', 'Mahasiswa Data deleted successfully');
    }
}
