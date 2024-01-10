<?php

class Admin extends Controller {

    public function index()
    {

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if ($_SESSION['akses'] == 'Pengguna'){  
            
            header('Location: '. BASEURL .'/home/beranda');
        }

        $data['judul'] = 'Reservasi Ruangan';
        $data['reservasi'] = $this->model('reservasi_model')->getAllReservasi();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'Pengguna') {
            
            header('Location: '. BASEURL .'/home');
        }

        $this->view('template/headerAdmin', $data);
        $this->view('admin/index', $data); 
        $this->view('template/footer', $data);
    }
    public function paket()
    {

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if ($_SESSION['akses'] == 'Pengguna'){  
            
            header('Location: '. BASEURL .'/home/beranda');
        }

        $data['judul'] = 'Data Paket';
        $data['paket'] = $this->model('paket_model')->getAllPaket();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'Pengguna') {
            
            header('Location: '. BASEURL .'/home');
        }

        $this->view('template/headerAdmin', $data);
        $this->view('admin/paket', $data); 
        $this->view('template/footerPaket', $data);
    }
    public function user()
    {

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if ($_SESSION['akses'] == 'Pengguna'){  
            
            header('Location: '. BASEURL .'/home/beranda');
        }

        $data['judul'] = 'Daftar Pengguna';
        $data['user'] = $this->model('userAdmin_model')->getAllUser();

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/login');

        }else if($_SESSION['akses'] == 'Pengguna') {
            
            header('Location: '. BASEURL .'/home');
        }

        $this->view('template/headerAdmin', $data);
        $this->view('admin/user', $data); 
        $this->view('template/footerUser', $data);
    }
    // Reservasi
    public function detail($id)
    {
        $data['judul'] = 'Detail Reservasi';
        $data['reservasi'] = $this->model('reservasi_model')->getReservasiById($id);
        $this->view('template/link', $data);
        $this->view('admin/detail', $data);
        $this->view('template/footer', $data);
    }

    public function tambah()
    {
        
        if( $this->model('reservasi_model')->tambahDataReservasi($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }

    public function hapus($id)
    {
        if( $this->model('reservasi_model')->hapusDataReservasi($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
        
    }
    

    public function getubah()
    {
        echo json_encode($this->model('reservasi_model')->getReservasiById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('reservasi_model')->ubahDataReservasi($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin');
            exit;
        }
    }
    // End Reservasi

    // Paket
    public function detailPaket($id)
    {
        $data['judul'] = 'Detail Paket';
        $data['paket'] = $this->model('paket_model')->getPaketById($id);
        $this->view('template/link', $data);
        $this->view('admin/detailPaket', $data);
        $this->view('template/footer', $data);
    }

    public function tambahPaket()
    {
        
        if( $this->model('paket_model')->tambahDataPaket($_POST) > 0 ) {
            FlasherPaket::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        } else {
            FlasherPaket::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        }
    }

    public function hapusPaket($id)
    {
        if( $this->model('paket_model')->hapusDataPaket($id) > 0 ) {
            FlasherPaket::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        } else {
            FlasherPaket::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        }
        
    }
    

    public function getubahPaket()
    {
        echo json_encode($this->model('paket_model')->getPaketById($_POST['id']));
    }

    public function ubahPaket()
    {
        if( $this->model('paket_model')->ubahDataPaket($_POST) > 0 ) {
            FlasherPaket::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        } else {
            FlasherPaket::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin/paket');
            exit;
        }
    }
    // End Paket


    // User
    public function tambahUser()
    {
        
        if( $this->model('userAdmin_model')->tambahDataUser($_POST) > 0 ) {
            FlasherUser::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        } else {
            FlasherUser::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }

    public function hapusUser($id)
    {
        if( $this->model('userAdmin_model')->hapusDataUser($id) > 0 ) {
            FlasherUser::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        } else {
            FlasherUser::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
        
    }
    

    public function getubahUser()
    {
        echo json_encode($this->model('UserAdmin_model')->getUserById($_POST['id']));
    }

    public function ubahUser()
    {
        if( $this->model('userAdmin_model')->ubahDataUser($_POST) > 0 ) {
            FlasherUser::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        } else {
            FlasherUser::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/admin/user');
            exit;
        }
    }
    // End User


    // Cari
    public function cari()
    {
        $data['judul'] = 'Reservasi Ruangan';
        $data['reservasi'] = $this->model('reservasi_model')->cariDataReservasi();
        $this->view('template/headerAdmin', $data);
        $this->view('admin/index', $data); 
        $this->view('template/footer', $data);
    }
    public function cariPaket()
    {
        $data['judul'] = 'Data Paket';
        $data['paket'] = $this->model('paket_model')->cariDataPaket();
        $this->view('template/headerAdmin', $data);
        $this->view('admin/paket', $data); 
        $this->view('template/footerPaket', $data);
    }
    // End cari
}