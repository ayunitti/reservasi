<?php

class Home extends Controller{
    public function beranda(){

        if(empty($_SESSION['akses'])){
                        
            header('Location: '. BASEURL .'/home/login');

        }else if ($_SESSION['akses'] == 'Admin'){  
            
            header('Location: '. BASEURL .'/admin');
        }

        $data['judul'] = 'Beranda';
        $this->view('template/header', $data);
        $this->view('home/beranda');
        $this->view('template/footer', $data);
    }
    public function login(){
        if (!empty($_SESSION['akses'])) {
            if($_SESSION['akses'] == 'Admin'){
                        
                header('Location: '. BASEURL .'/admin');
            }else{  
                
                header('Location: '. BASEURL .'/home/beranda');
            }
        }
        
        $data['judul'] = 'Masuk';
        $this->view('template/awal', $data);
        $this->view('home/login', $data);
    }
    public function register(){
        $data['judul'] = 'Daftar';
        $this->view('template/awal', $data);
        $this->view('home/register', $data);
    }
    public function index(){
        $data['judul'] = 'Awal';
        $this->view('home/index', $data);
    }

    public function user(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if( !empty($email) || !empty($password)){
            
            if( $this->model('login_model')->cekUserTrue($email) > 0 ){
                $data = $this->model('login_model')->ambilDataUser($email);
                $passwordDB = $data['password'];
               // var_dump($email,$password, $passwordDB);
                
                if( $password == $passwordDB) {
                    $_SESSION['password'] = $passwordDB;
                    // $_SESSION['userLogin'] = 'userLogin';
                    // header('Location: '. BASEURL .'/about');
                    session_start();
                    $_SESSION['akses'] = $data['akses'];

                    if($_SESSION['akses'] == 'Admin'){
                        
                        header('Location: '. BASEURL .'/admin');
                    }else{  
                        
                        header('Location: '. BASEURL .'/home/beranda');
                    }
                    
                }else{
                    echo 'Kata sandi salah';
                }
            }else{
                header('Location: '. BASEURL .'/home/login');
                echo 'Gagal menemukan pengguna';
                
            }
        }else{
            echo ' Masukan data terlebih dahulu';
        }
    }
    public function newReg(){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $akses = $_POST['akses'];

        // Memanggil model register_model untuk memeriksa apakah nama sudah tersedia
        $query_check = $this->model('register_model')->cekUserTrue($email);

        if ($query_check) {
            echo "Email sudah tersedia. Tolong buat email yang berbeda.";
        } else {
            // Memanggil model register_model untuk menambahkan data pengguna
            if ($this->model('register_model')->tambahDataUser($nama, $email, $password, $akses) > 0) {
                session_start();
                $_SESSION['nama'] = $nama;
                $_SESSION['email'] = $email;
                $_SESSION['akses'] = $akses; // Simpan informasi akses pengguna di sesi
                header('Location: ' . BASEURL . '/home/login');
            } else {
                echo "Gagal!"; // Pesan gagal pendaftaran
            }
        }
    }

    public function paket(){
        $data['judul'] = 'Paket';
        $data['paket'] = $this->model('paket_model')->getAllPaket();
        $this->view('template/header', $data);
        $this->view('home/paket', $data);
        $this->view('template/footer', $data);
    }
    
    public function prosesLogout(){
        session_start();
        session_destroy();

        header('location:' . BASEURL . '/home');
        exit();
    }
}

?>