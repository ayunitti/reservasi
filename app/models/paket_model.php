<?php

class paket_model {
    private $table = 'paket';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPaket()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getPaketLimit3()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 3');
        return $this->db->resultSet();
    }

    public function getPaketById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPaket($data)
    {
        $query = "INSERT INTO $this->table
                    (pax, gambar, jumlah, harga_weekday, harga_weekend, jam_buka, jam_tutup, deskripsi)
                    VALUES
                  (:pax, 
                  :gambar,
                  :jumlah, 
                  :harga_weekday,
                  :harga_weekend,
                  :jam_buka, 
                  :jam_tutup,
                  :deskripsi)";

        $this->db->query($query);
        $this->db->bind('pax', $data['pax']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('harga_weekday', $data['harga_weekday']);
        $this->db->bind('harga_weekend', $data['harga_weekend']);
        $this->db->bind('jam_buka', $data['jam_buka']);
        $this->db->bind('jam_tutup', $data['jam_tutup']);
        $this->db->bind('deskripsi', $data['deskripsi']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPaket($id)
    {
        $query = "DELETE FROM paket WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPaket($data)
    {
        $query = "UPDATE paket SET
                    pax =  :pax, 
                    gambar = :gambar,
                    jumlah = :jumlah,
                    harga_weekday = :harga_weekday,
                    harga_weekend = :harga_weekend,
                    jam_buka = :jam_buka, 
                    jam_tutup = :jam_tutup, 
                    deskripsi = :deskripsi 
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('pax', $data['pax']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('harga_weekday', $data['harga_weekday']);
        $this->db->bind('harga_weekend', $data['harga_weekend']);
        $this->db->bind('jam_buka', $data['jam_buka']);
        $this->db->bind('jam_tutup', $data['jam_tutup']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function cariDataPaket()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM paket WHERE pax LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}