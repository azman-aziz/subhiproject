<?php

namespace App\Controllers\backend;
use App\Controllers\BaseController;
use App\Models\UsersModel;

class Back_profil extends BaseController{


   

    
    public function index()
    {
        // if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        // {
        //     // Whoops, we don't have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }
        $model = new UsersModel;
        $data = [
            'title' => 'welcome',
            'user' => $model->getData()
        ];

        

        echo view('backend/back_template/header', $data);
        echo view('backend/user/back_user', $data);
        echo view('backend/back_template/footer', $data);
        
    }

    public function tambah(){
        $data = [
            'title' => 'tambah data user'
        ];


        echo view('backend/back_template/header', $data);
        echo view('backend/user/backtambah_user', $data);
        echo view('backend/back_template/footer', $data);
    }

    public function simpan(){
        helper(['form']);
        $model = new UsersModel;

        if($this->validate([
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required',
            'nomer-telpon' => 'required',
            'gambar' => 'required',
            'username' => 'required',
            'password' => 'required',
            'level_id' => 'required',
        ])){

        $model->save([
            'nama_lengkap' => $this->request->getVar('nama'),
            'tanggal_lahir' => $this->request->getVar('lahir'),
            'email' => $this->request->getVar('email'),
            'nomer_telpon' => $this->request->getVar('telpon'),
            'gambar' => $this->request->getVar('foto'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'level_id' => $this->request->getVar('level')
        ]);
        session()->setFlashdata('pesan', 'Berhasil');
        } else {
            session()->setFlashdata('pesan', 'Gagal');
        }

        return redirect()->to('/backend');
        
    }

    public function detail($id){
        
        $model = new UsersModel;
        $data = $model->detailData($id);

        dd($data);
        
        $data = [
            'title' => 'detail data user'
            
        ];

        echo view('backend/back_template/header', $data);
        echo view('backend/user/back_detail', $data);
        echo view('backend/back_template/footer', $data);
    }

    public function delete($id){
        $model = new UsersModel;
        $data = $model->deleteData($id);

        $data = [
            'title' => 'detail data user',
            'keterangan' => 'Hapus'
            
        ];

        if($data){
            session()->setFlashdata('pesan', 'Berhasil');
        }else{
            session()->setFlashdata('pesan', 'Gagal');
        }

        echo view('backend/back_template/header', $data);
        echo view('backend/user/back_user', $data);
        echo view('backend/back_template/footer', $data);
    }




}