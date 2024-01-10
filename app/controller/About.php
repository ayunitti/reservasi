<?php

class About extends Controller{
    public function index($nama = 'Cakra', $sekolah = 'SMKN1 DPS'){
        $data['judul'] = 'About';
        $this->view('template/header', $data);
        $this->view('about/index');
        $this->view('template/footer');
    }
    public function page(){
        $data['judul'] = 'Pages';
        $this->view('template/header', $data);
        $this->view('about/page');
        $this->view('template/footer');
    }
}