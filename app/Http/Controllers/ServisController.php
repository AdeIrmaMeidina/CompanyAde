<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $servis = Servis::latest()->paginate();
        return view('admin.servis.index', compact('servis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servis.create');

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
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $servis = new Servis();
        $servis->judul = $request->judul;
        $servis->deskripsi = $request->deskripsi;
         // upload image
        $image = $request->file('image');
        $image->storeAs('public/servises', $image->hashName());
        $servis->image = $image->hashName();
        $servis->save();
        return redirect()->route('servis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function show(Servis $servis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        return view('admin.servis.edit', compact('servis'));

        $servis->save();
        return redirect()->route('servis.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:5000',

        ]);

        $servis = Servis::findOrFail($id);
        $servis->judul = $request->judul;
        $servis->deskripsi = $request->deskripsi;
        // upload image
        $image = $request->file('image');
        $image->storeAs('public/servises', $image->hashName());
        $servis->image = $image->hashName();
        $servis->save();
        return redirect()->route('servis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servis  $servis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();
        return redirect()->route('servis.index');
    }
}
