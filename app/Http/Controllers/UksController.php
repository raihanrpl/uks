<?php

namespace App\Http\Controllers;

use App\Models\Uks;
use Illuminate\Http\Request;

class UksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uks = Uks::orderBy('created_at', 'DESC')->paginate(1);
        return view('pages.uks.index', compact('uks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.uks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Uks::create($request->all());

        return redirect()->route('uks.index')->with('succes', 'Data sakit add succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $uks = Uks::findOrFail($id);
        return view('pages.uks.show', compact('uks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $uks = Uks::findOrFail($id);
        return view('pages.uks.edit', compact('uks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $uks = Uks::findOrFail($id);

        $uks->update($request->all());

        return redirect()->route('uks.index')->with('succes', 'Data sakit Updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $uks = Uks::findOrFail($id);

        $uks->delete();

        return redirect()->route('uks.index')->with('succes', 'Data sakit Deleted succesfully');
    }
}
