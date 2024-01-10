<?php

class Paket extends Controller{
    public function index(){
        $data['judul'] = 'Paket';
        $this->view('template/headerPaketUser', $data);
        $data['paket'] = $this->model('paket_model')->getAllPaket();
        $this->view('paket/index', $data);
        $this->view('template/footer');
    }
    public function detailPaketUser($id){
        $data['judul'] = 'Detail Paket';
        $data['paket'] = $this->model('paket_model')->getPaketById($id);
        $this->view('template/headerPaketUser', $data);
        $this->view('paket/detailPaketUser', $data);
        $this->view('template/footer');
    }

}
?>