<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\ItemsModel;

class Items extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'auth']);
        $this->itemsModel = new ItemsModel();
        $this->customerModel = new CustomerModel();
    }

    public function index()
    {
        if (in_groups('admin')) {
            if (session('OTPVerified')) {
                $data = [
                    'title' =>  'Dashboard',
                ];

                return view('Admin/index', $data);
            }
            echo '
                <script>
                    window.location="' . base_url('Items/otp') . '";
                </script>
            ';
        } else if (in_groups('customer')) {
            if (session('OTPVerified')) {
                $data2 = [
                    'title' => 'Homepage',
                    'items' => $this->itemsModel->getItems()
                ];
                return view('pages/index', $data2);
            }
            echo '
                <script>
                    window.location="' . base_url('Items/otp') . '";
                </script>
            ';
        } else {
            $data2 = [
                'title' => 'Homepage',
                'items' => $this->itemsModel->getItems()
            ];
            return view('pages/index', $data2);
        }
    }

    public function otp()
    {
        // Membuat nilai OTP dan Session untuk OTP
        $OTP = rand(1000, 9000);
        session()->set('OTP', $OTP);
        // Mengambil Nilai Email
        $email_user = user()->email;
        // Mengaktifkan Service Email
        $email = \Config\Services::email();
        $email->setFrom('inibudisetyawan@gmail.com', 'Admin Ecoland');
        $email->setTo($email_user);
        $email->setSubject('Kode OTP - Verifikasi Login Ecoland');
        $email->setMessage($OTP);
        // Mengirim e-mail
        if ($email->send()) {
            session()->set('OTPVerified', True);
            echo '
                <script>
                    alert("Kode OTP sudah dikirimkan, silahkan cek email Anda");
                </script>
            ';
            return view('auth/otp');
        } else {
            echo '
                <script>
                    alert("Gagal Terkirim");
                    window.location="' . base_url('/logout') . '";
                </script>
            ';
        }
    }

    public function otpVer()
    {
        //Verifikasi dari kode OTP yang sudah di kirimkan
        $otp = session('OTP');
        $user_input = $this->request->getPost('kode');
        if ($otp == $user_input) {
            if (in_groups('admin')) {
                $data = [
                    'title' =>  'Dashboard',
                ];

                return view('Admin/index', $data);
            }
            //customer
            if (empty($this->customerModel->getCustomerByUser(user_id()))) {
                //Ini buat bikin profile customer klo baru create(isi = default)
                $this->customerModel->createCustomerProfile(user_id());
            }

            $data2 = [
                'title' => 'Homepage',
                'items' => $this->itemsModel->getItems()
            ];
            return view('pages/index', $data2);
        } else {
            echo '
                <script>
                    alert("OTP Salah, silahkan login ulang");
                    window.location="' . base_url('/logout') . '";
                </script>
            ';
        }
    }

    public function listItems()
    {
        if (in_groups('admin')) {
            $data = [
                'items' => $this->itemsModel->getItemsAdmin(),
                'title' => 'Item List'
            ];
            return view('Admin/items/listItems', $data);
        } else if (in_groups('customer')) {
            $data = [
                'items' => $this->itemsModel->getItems(),
                'title' => 'Item List'
            ];
            return view('pages/book/rooms', $data);
        }
    }

    public function oneItem($id_item)
    {
        $data = [
            'item' => $this->itemsModel->getItems($id_item),
            'title' => 'Detail'
        ];
        // dd($data);  
        return view('admin/items/detail', $data);
    }

    public function addItemPage()
    {
        $data = [
            'itemBaru' => True, //Hmmm, ini buat nambah bedain antara form tambah atau form edit (formnya pake satu view aja)
            'title' => "Add Items",
        ];
        return view('Admin/items/addItem', $data);
    }

    public function addItem()
    {
        $data = [
            //Bagian getPost() isinya bisa diganti sesuai yang ada di view
            //Kalo ga, yang di view name dari inputnya yang ngikutin yang disini

            //Mungkin cek error input nambah datanya dibuat di html e aja kali ya, biar ga ribet
            'items_id' => '',
            'items_name' => $this->request->getPost('nama_item'),
            'items_type' => $this->request->getPost('tipe_item'),
            'items_city' => $this->request->getPost('kota_item'),
            'items_address' => $this->request->getPost('alamat_item'),
            'items_price' => $this->request->getPost('harga_item'),
            'items_desc' => $this->request->getPost('deskripsi_item'),
            'items_facility' => $this->request->getPost('fasilitas_item'),
        ];
        $this->itemsModel->addItem($data);
        session()->setFlashData('pesan', 'Data has added successfully!');
        return redirect()->to('items/listitems');
    }

    public function deleteItem($id)
    {
        //di tombol delete di view nya dikasih attribute onclick="return confirm('Anda yakin akan menghapus item?');"
        $this->itemsModel->delete($id);
        session()->setFlashData('pesan', 'Data has been deleted!');
        return redirect()->to('items/listitems');
    }

    public function updateItemPage($item_id)
    {
        $data = [
            'item' => $this->itemsModel->getItems($item_id),
            'title' => 'Update',
            'itemBaru' => False,
        ];

        return view('admin/items/edit', $data);
    }

    public function updateItem($item_id)
    {
        $data = [
            //Bagian getPost() isinya bisa diganti sesuai yang ada di view
            //Kalo ga, yang di view name dari inputnya yang ngikutin yang disini

            //Mungkin cek error input nambah datanya dibuat di html e aja kali ya, biar ga ribet
            'items_name' => $this->request->getVar('nama_item'),
            'items_type' => $this->request->getVar('tipe_item'),
            'items_city' => $this->request->getVar('kota_item'),
            'items_address' => $this->request->getVar('alamat_item'),
            'items_price' => $this->request->getVar('harga_item'),
            'items_desc' => $this->request->getVar('deskripsi_item'),
            'items_facility' => $this->request->getVar('fasilitas_item'),
        ];
        $this->itemsModel->updateItem($item_id, $data);
        session()->setFlashData('pesan', 'Data has been updated successfully!');
        return redirect()->to('items/listitems');
    }
}
