<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\ConfirmationModel;

class Confirmation extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url', 'auth']);
        $this->customerModel = new CustomerModel();
        $this->confirmationModel = new ConfirmationModel();
    }
    
}
