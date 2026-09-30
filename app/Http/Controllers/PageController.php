<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Home',
            'name' => 'Aulia Pebriani',
            'status'=> 'Mahasiswa',
            'major' => 'Ilmu Komputer',
            'university'=> 'Universitas Negeri Medan'
            
        ];

        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'Hai, saya Aulia Pebriani mahasiswi di Universitas Negeri Medan. 
            Menerima pekerjaan dengan gaji dua digit tapi tidak membuat stres, dan yang paling penting libur sabtu minggu.'
        ];

        return view('about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'email' => 'aulia@gmail.com',
            'instagram'=> 'aulia_pbrni'
        ];

        return view('contact', $data);
    }
}