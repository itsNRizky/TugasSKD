<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\ItemsModel;

class Home extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'auth']);
        $this->customerModel = new CustomerModel();
        $this->itemsModel = new ItemsModel();
    }
    public function index()
    {
        if (in_groups('customer')) {
            //cek apakah user yang login udah dibuatin profile nya
            if (empty($this->customerModel->getCustomerByUser(user_id()))) {
                //Ini buat bikin profile customer klo baru create(isi = default)
                $this->customerModel->createCustomerProfile(user_id());
            }

            $data = [
                'title' => 'Welcome To Ecoland',
                'items' => $this->itemsModel->getItems()
            ];
            return view('pages/index', $data);
        } else if (in_groups('admin')) {
            return redirect()->to('Admin/');
        } else {
            $data = [
                'title' => 'Welcome To Ecoland',
                'items' => $this->itemsModel->getItems()
            ];
            return view('pages/index', $data);
        }
    }
}
