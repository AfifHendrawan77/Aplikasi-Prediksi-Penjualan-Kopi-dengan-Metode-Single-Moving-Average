<?php

namespace App\Controllers\Owner;

use App\Models\Users;


class Data_Users extends BaseController
{
    public function index()
    {
        $data = new Users();
        $users = $data->getUsers();
        return view('owner/data_users', compact('users'));
    }

    public function simpan_data_users()
    {
        $data = new Users();
        $data->insert([
                    'name' => $this->request->getVar('name'),
                    'email' => $this->request->getVar('email'),
                    'phone_no' => $this->request->getVar('phone_no'),
                    'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
                    'role' => $this->request->getVar('role'),
                ]);
               
                session()->setFlashdata('message', 'Selamat! Data Users Berhasil ditambahkan');
                return redirect()->to('owner/data_users');
    }

    public function edit_users($id)
    {
        $datauser = new Users();

       $data = array(
           'users' => $datauser->find($id)
       );

       return view('CRUD/edit_users', $data);
    }

    public function update_users($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
       $datauser = new Users();
            
       //insert data into database
       $datauser->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
            'role' => $this->request->getPost('role'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data User Berhasil diubah');

       return redirect()->to('owner/data_users');
    }

    public function update_users_akun($id)
    {
        //load helper form and URL
        helper(['form', 'url']);
        

       //model initialize
       $datauser = new Users();
            
       //insert data into database
       $datauser->update($id, [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone_no' => $this->request->getPost('phone_no'),
            'role' => $this->request->getPost('role'),
       ]);

       //flash message
       session()->setFlashdata('message_update', 'Selamat! Data User Berhasil diubah');

       return redirect()->to('owner/data_users');
    }

    public function hapus_users($id)
    {
        $datauser = new Users();
        $success = $datauser->hapus($id);
        if($success){
            session()->setFlashdata('message_delete', 'Selamat! Data Users Berhasil dihapus');
            return redirect()->to('owner/data_users');
        }
    }

    public function excel_users()
    {
        $data = new Users();
        $users = $data->getUsers();
        return view('excel/excel_users', compact('users'));
    }
}
