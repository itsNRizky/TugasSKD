<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customer extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'auth']);
        $this->customerModel = new CustomerModel();
        // $this->builder = $this->db->table('users');

    }

    public function index()
    {
        $data = [
            'customer' => $this->customerModel->getCustomerByUser(user_id()),
            'user'
        ];
        return view('User/profile', $data);
    }

    public function update($id_customer)
    {
        $data = [
            'customer' => $this->customerModel->getCustomerById($id_customer)
        ];
        // $query = $this->builder->get();
        // $data['users'] = $query->getResult();
        return view('User/editProfile', $data);
    }

    public function updateCustomer($id_customer)
    {
        //Bagian getPost() isinya bisa diganti sesuai yang ada di view
        //Kalo ga, yang di view name dari inputnya yang ngikutin yang disini

        //Mungkin cek error input nambah datanya dibuat di html e aja kali ya, biar ga ribet

        $data = [

            'customer_name' => $this->request->getVar('nama_customer'),
            'customer_telp' => $this->request->getVar('telp_customer'),
            'customer_address' => $this->request->getVar('alamat_customer'),
        ];

        $this->customerModel->updateCustomerProfile($id_customer, $data);
        session()->setFlashData('pesan', 'Data has been saved successfully!');
        return redirect()->to('customer');
    }
}
