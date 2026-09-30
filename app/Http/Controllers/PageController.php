<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'name' => 'Nama Mahasiswa',
            'major' => 'Program Studi'
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Halaman tentang mahasiswa dan informasi singkat mengenai diri saya.'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'email@example.com'
        ];

        return view('contact', $data);
    }
}