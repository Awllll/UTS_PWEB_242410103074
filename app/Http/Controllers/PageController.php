<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        return redirect()->route('dashboard', ['username' => $username]);
    }

     public function dashboard(Request $request)
    {
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }

      public function pengelolaan(Request $request)
    {
        $username = $request->query('username');
        $berita = [
            [
                'judul' => 'Attack on Titan: Finale Season Part 4 Tayang November 2025',
                'kategori' => 'Anime',
                'penulis' => 'Eren - TimNews'
            ],

            [
                'judul' => 'Demon Slayer Season 4 Diumumkan dengan Arc “Hashira Training"',
                'kategori' => 'Anime',
                'penulis' => 'Uzui - Otakuvers'
            ],

            [
                'judul' => 'Jujutsu Kaisen Season 3 Fokus pada Arc Culling Game"',
                'kategori' => 'Anime',
                'penulis' => 'GojoBelah2 - NewsNime'
            ],

            [
                'judul' => 'One Piece Capai Episode 1100! Petualangan Luffy Berlanjut',
                'kategori' => 'Manga',
                'penulis' => 'Morgan - Big News'
            ],

            [
                'judul' => 'My Hero Academia Siapkan Arc Terakhir Deku vs All For One',
                'kategori' => 'Manga',
                'penulis' => 'Urara- NewsNime'
            ],

            [
                'judul' => 'Blue Lock Dapatkan Spinoff Baru Tentang Rin Itoshi',
                'kategori' => 'Manga',
                'penulis' => 'Sae - Otakuvers'
            ],
        ];
        return view('pengelolaan', compact('username', 'berita'));
    }

    public function profile(Request $request)
    {
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
