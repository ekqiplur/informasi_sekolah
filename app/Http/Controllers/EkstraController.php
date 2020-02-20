<?php

namespace App\Http\Controllers;
use App\Ekstrakulikuler;

use Illuminate\Http\Request;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstra = Ekstrakulikuler::paginate(5);
        return view('admin.ekstrakulikuler.index', compact('ekstra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ekstrakulikuler.create');
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
            'name' => 'required',
            'deskripsi' => 'required'
        ]);

        Ekstrakulikuler::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambah Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ekstra = Ekstrakulikuler::findorfail($id);
        return view('admin.ekstrakulikuler.edit', compact('ekstra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'deskripsi' => 'required'
        ]);

        $ekstra_data = [
            'name' => $request->name,
            'deskripsi' => $request->deskripsi
        ];

        Ekstrakulikuler::whereId($id)->update($ekstra_data);

        return redirect()->route('ekstrakulikuler.index')->with('success', 'Berhasil mengUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ekstra = Ekstrakulikuler::findorfail($id);
        $ekstra->delete();

        return redirect() -> back() -> with('success', 'Data berhasil di Hapus');
    }
}
