<?php

class Pembayaran extends Controller{
    public function index(){
        $data['judul'] = 'Pembayaran';
        $this->view('template/header', $data);
        $this->view('pembayaran/index');
        $this->view('template/footer');
    }
}

?>