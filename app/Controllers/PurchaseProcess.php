<?php

namespace App\Controllers;

class PurchaseProcess extends BaseController
{
    public function index(): string
    {   
        $data['page_title'] = 'Purchase Process';    
        $data['meta'] = [];

        return view('purchase_process', $data);
    }
}
?>
