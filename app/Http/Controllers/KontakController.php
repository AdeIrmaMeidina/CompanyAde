<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kontak = Kontak::latest()->paginate();
        return view('admin.kontak.index', compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kontak.create');
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
            'telepon' => 'required',
            'email' => 'required',
            'lokasi' => 'required',

        ]);

        $kontak = new Kontak();
        $kontak->telepon = $request->telepon;
        $kontak->email = $request->email;
        $kontak->lokasi = $request->lokasi;
         // upload image
        // $image = $request->file('image');
        // $image->storeAs('public/beritas', $image->hashName());
        // $berita->image = $image->hashName();
        $kontak->save();
        return redirect()->route('kontak.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function show(Kontak $kontak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $kontak = Kontak::findOrFail($id);
        return view('admin.kontak$kontak.edit', compact('kontak'));

        $kontak->save();
        return redirect()->route('kontak.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'telepon' => 'required',
            'email' => 'required',
            'lokasi' => 'required',

        ]);

        $kontak = Kontak::findOrFail($id);
        $kontak->telepon = $request->telepon;
        $kontak->email = $request->email;
        $kontak->lokasi = $request->lokasi;
        // upload image
        // $image = $request->file('image');
        // $image->storeAs('public/beritas', $image->hashName());
        // $berita->image = $image->hashName();
        $kontak->save();
        return redirect()->route('kontak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontak  $kontak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kontak = Kontak::findOrFail($id);
        $kontak->delete();
        return redirect()->route('kontak.index');
    }
}
