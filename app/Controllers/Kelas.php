<?php

namespace App\Controllers;

class Kelas extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'tambah data user'
        ];


        echo view('backend/back_template/header', $data);
        echo view('backend/user/backtambah_user', $data);
        echo view('backend/back_template/footer', $data);
	}
}
