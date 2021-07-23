<?php

namespace App\Controllers\frontend;
use App\Controllers\BaseController;

class Home extends BaseController{


public function index()
{
    // if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
    // {
    //     // Whoops, we don't have a page for that!
    //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    // }

    $data['title'] = "welocme"; // Capitalize the first letter

    echo view('template/header', $data);
    echo view('template/navbar', $data);
    echo view('frontend/vf_index', $data);
    echo view('template/footer', $data);
}

public function kelas(){

    $data['title'] = "welocme"; // Capitalize the first letter

    echo view('template/header', $data);
    echo view('template/navbar', $data);
    echo view('frontend/vf_kelas', $data);
    echo view('template/footer', $data);
}

public function toko(){

    $data['title'] = "welocme"; // Capitalize the first letter

    echo view('template/header', $data);
    echo view('template/navbar', $data);
    echo view('frontend/vf_toko', $data);
    echo view('template/footer', $data);
}



}