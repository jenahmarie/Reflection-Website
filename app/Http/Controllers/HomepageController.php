<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function showHomepage() {
        return view('homepage');
    }

    public function showProfilepage() {
        return view('profilepage');
    }

    public function showJournalpage() {
        return view('journalpage');
    }

    public function showReflectionpage() {
        return view('reflectionpage');
    }

    public function showAlbumpage() {
        return view('albumpage');
    }
}
