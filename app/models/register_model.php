<?php
class register_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cekUserTrue($email)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email = :email');
        $this->db->bind('email', $email);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahDataUser($nama, $email, $password, $akses)
    {
        // Cek apakah nama sudah ada
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama = :nama');
        $this->db->bind('nama', $nama);

        if ($this->db->rowCount() > 0) {
            return "Nama sudah tersedia. Tolong buat nama yang berbeda.";
        } else {
            // Insert new user with hashed password
            $this->db->query("INSERT INTO " . $this->table . " (nama, email, password, akses) VALUES (:nama, :email, :password, :akses)");
            $this->db->bind('nama', $nama);
            $this->db->bind('email', $email);
            $this->db->bind('password', $password);
            $this->db->bind('akses', $akses);

            $this->db->execute();
                return $this->db->rowCount();
            }
        }
    }
?>