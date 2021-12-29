<?php

namespace App\Controllers;

use App\Models\BookingModel;
use App\Models\CustomerModel;
use App\Models\ItemsModel;

class Booking extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'auth']);
        $this->customerModel = new CustomerModel();
        $this->bookingModel = new BookingModel();
        $this->itemsModel = new ItemsModel();
    }

    public function index()
    {
        // $data = [
        //     'book' => $this->bookingModel->getBooking()
        // ];
        $data = [
            'items' => $this->itemsModel->getItems(),
            'title' => 'Item List'
        ];
        return view('pages/book/rooms', $data);
    }

    public function details($items_id)
    {
        $data = [
            'items' => $this->itemsModel->getItems($items_id)
        ];
        return view('pages/book/details', $data);
    }

    public function listBook()
    {
        // $data = [
        //     'bookCustomer' => $this->bookingModel->getBookingCustomer($this->customerModel->getCustomerIdByUser(user_id()))
        // ];
        return view('pages/book/details');
    }

    public function create($item_id)
    {

        $upload = $this->request->getFile('bukti_booking');
        $upload->move('../public/images/proof/');
        $customer = $this->customerModel->getCustomerIdByUser(user_id());
        $customer_id = $customer['customer_id'];
        $data = [
            'booking_id' => '',
            'booking_price' => $this->request->getPost('harga_booking'),
            'booking_date_start' => $this->request->getPost('mulai_tanggal_booking'),
            'booking_date_stop' => $this->request->getPost('stop_tanggal_booking'),
            'booking_proof_of_payment' => '/images/proof/' . $upload->getName(),
            'booking_id_items' => $item_id,
            'booking_id_customer' => $customer_id,
            'booking_status' => 'pending'
        ];

        $this->bookingModel->createBook($data);
        echo '
                <script>
                    alert("Booking Berhasil Dibuat!");
                    window.location="' . base_url('Items/') . '";
                </script>
            ';
    }
}
