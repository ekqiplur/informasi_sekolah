<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class KontakController extends Controller
{
    public function index() {
        $kontak = Kontak::paginate(3);
        return view('admin.kontak.index', compact('kontak'));
    }

    public function edit($id) {
        $kontak = Kontak::findorfail($id);
        return view('admin.kontak.edit', compact('kontak'));
    }
    
    public function update(Request $request, $id) {
        $kontak_data = [
            'telp' => $request->telp,
            'alamat' => $request->alamat
        ];
        Kontak::findorfail($id)->update($kontak_data);
        return redirect()->route('kontak')->with('success', 'Berhasil merupah Kontak');
    }
}
