<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class AdddSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::orderBy('created_at', 'DESC')->paginate(1);
        return view('pages.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Siswa::create($request->all());

        return redirect()->route('addsiswa.index')->with('succes', 'Siswa Add succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('pages.siswa.show', compact('siswa'));
    }

    public function edit(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('pages.siswa.edit', compact('siswa'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->update($request->all());

        return redirect()->route('addsiswa.index')->with('succes', 'Siswa Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()->route('addsiswa.index')->with('succes', 'Siswa Deleted succesfully');
    }
}
