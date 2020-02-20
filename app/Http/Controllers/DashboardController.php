<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Profil;
use App\Fasilitas;
use App\Ekstrakulikuler;
use App\Kontak;

class DashboardController extends Controller
{
    public function index() {
        $data = Post::latest()->take(4)->get();
        return view('dashboard', compact('data'));
    }

    public function about() {
        $data = Profil::get();
        return view('bord.about', compact('data'));
    }

    public function fasilitas() {
        $data = Fasilitas::get();
        return view('bord.fasilitas', compact('data'));
    }
    
    public function kegiatan() {
        $data = Ekstrakulikuler::get();
        return view('bord.kegiatan', compact('data'));
    }

    public function kontak() {
        $data = Kontak::get();
        return view('bord.kontak', compact('data'));
    }

    public function list_news() {
        $data = Post::latest()->paginate(6);
        return view('bord.news_list', compact('data'));
    }

    public function news_content($slug) {

        $data = Post::where('slug', $slug)->get();
        return view('bord.isi', compact('data'));

    }
}