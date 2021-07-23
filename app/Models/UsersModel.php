<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model{
    protected $table      = 'users';
    protected $primaryKey = 'users_id';

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $allowedFields = ['nama_lengkap', 'tanggal_lahir', 'email', 'nomer_telpon','gambar','username', 'password', 'level_id'];


    public function getData(){

       return  $this->findAll();
    }

    public function detailData($id){
        return $this->where(['users_id'=> $id])->first();
    }

    public function deleteData($id){
        return $this->where(['users_id' => $id])->delete();
    }
}