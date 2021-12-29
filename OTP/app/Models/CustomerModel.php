<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customer_id';

    public function getCustomerByUser($id)
    {
        return $this->db->table('customer')->where(['user_id' => $id])->get()->getResultArray()[0];
    }

    public function getCustomerById($customer_id)
    {
        return $this->db->table('customer')->where(['customer_id' => $customer_id])->get()->getResultArray()[0];
    }

    public function getCustomerIdByUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['user_id' => $id])->first();
    }


    public function createCustomerProfile($user_id)
    {
        $data = [
            'customer_id' => '',
            'customer_name' => 'Masukkan nama anda',
            'customer_telp' => 'Masukkan no hp',
            'customer_address' => 'Masukkan alamat anda',
            'user_id' => $user_id
        ];
        return $this->db->table('customer')->insert($data);
    }

    public function updateCustomerProfile($customer_id, $data)
    {
        return $this->db->table('customer')->where(['customer_id' => $customer_id])->update($data);
    }
}
