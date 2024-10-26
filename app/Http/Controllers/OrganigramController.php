<?php

namespace App\Http\Controllers;

use App\Models\Organigram;
use Illuminate\Http\Request;

class OrganigramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organigram = Organigram::latest()->paginate();
        return view('admin.organigram.index', compact('organigram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.organigram.create');
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
            'jabatan' => 'required',

        ]);

        $organigram = new Organigram();
        $organigram->nama = $request->nama;
        $organigram->jabatan = $request->jabatan;
        $organigram->save();
        return redirect()->route('organigram.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organigram  $organigram
     * @return \Illuminate\Http\Response
     */
    public function show(Organigram $organigram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organigram  $organigram
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organigram = Organigram::findOrFail($id);
        return view('admin.organigram.edit', compact('organigram'));

        $organigram->save();
        return redirect()->route('organigram.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organigram  $organigram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'nama',
            'jabatan' => 'required',
        ]);
        $organigram = Organigram::findOrFail($id);
        $organigram->nama = $request->nama;
        $organigram->jabatan = $request->jabatan;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organigram  $organigram
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organigram = Organigram::findOrFail($id);
        $organigram->delete();
        return redirect()->route('organigram.index');
    }
}
