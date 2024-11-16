<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sparepart = Sparepart::latest()->paginate();
        return view('admin.sparepart.index', compact('sparepart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sparepart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
           'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $sparepart = new Sparepart();
        $sparepart->nama = $request->nama;
         // upload image
        $image = $request->file('image');
        $image->storeAs('public/spareparts', $image->hashName());
        $sparepart->image = $image->hashName();
        $sparepart->save();
        return redirect()->route('sparepart.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function show(Sparepart $sparepart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $sparepart = Sparepart::findOrFail($id);
        return view('admin.sparepart.edit', compact('sparepart'));

        $sparepart->save();
        return redirect()->route('sparepart.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $sparepart = Sparepart::findOrFail($id);
        $sparepart->nama = $request->nama;
             // upload image
        $image = $request->file('image');
        $image->storeAs('public/spareparts', $image->hashName());
        $sparepart->image = $image->hashName();
        $sparepart->save();
        return redirect()->route('sparepart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sparepart = Sparepart::findOrFail($id);
        $sparepart->delete();
        return redirect()->route('sparepart.index');
    }
}
