<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class ProfilController extends Controller
{
    public function index_sejarah() {
        $profile = Profil::paginate(2);
        return view('admin.profile.index_sejarah', compact('profile'));
    }
    
    public function index_visi() {
        $profile = Profil::paginate(2);
        return view('admin.profile.index_visi', compact('profile'));
    }
    
    public function sejarah($id) {
        $profile = Profil::findorfail($id);
        return view('admin.profile.edit_sejarah', compact('profile'));
    }
    
    public function sejarah_update(Request $request, $id) {
        $profile_data = [
            'sejarah' => $request->sejarah
        ]; 
        Profil::whereId($id)->update($profile_data);
        return redirect()->route('profil.sejarah')->with('success', 'Berhasil Mengupdate Sejarah');
    }

    public function visi($id) {
        $profile = Profil::findorfail($id);
        return view('admin.profile.edit_visi', compact('profile'));
    }
    
    public function visi_update(Request $request, $id) {
        $profile_data = [
            'visi_misi' => $request->visi_misi
        ]; 
        Profil::whereId($id)->update($profile_data);
        return redirect()->route('profil.visi')->with('success', 'Berhasil Mengupdate Sejarah');
    }
}
