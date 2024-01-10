<?php

class reservasi_model {
    private $table = 'reservasi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllReservasi()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getReservasiLimit3()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 3');
        return $this->db->resultSet();
    }

    public function getReservasiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataReservasi($data)
    {
        $query = "INSERT INTO $this->table
                    (atas_nama, tanggal_reservasi, jam_reservasi, tipe_ruangan, total_harga, status_bayar)
                    VALUES
                  (:atas_nama, 
                  :tanggal_reservasi, 
                  :jam_reservasi,
                  :tipe_ruangan,
                  :total_harga, 
                  :status_bayar)";

        $this->db->query($query);
        $this->db->bind('atas_nama', $data['atas_nama']);
        $this->db->bind('tanggal_reservasi', $data['tanggal_reservasi']);
        $this->db->bind('jam_reservasi', $data['jam_reservasi']);
        $this->db->bind('tipe_ruangan', $data['tipe_ruangan']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->bind('status_bayar', $data['status_bayar']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataReservasi($id)
    {
        $query = "DELETE FROM reservasi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataReservasi($data)
    {
        $query = "UPDATE reservasi SET
                    atas_nama =  :atas_nama, 
                    tanggal_reservasi = :tanggal_reservasi,
                    jam_reservasi = :jam_reservasi,
                    tipe_ruangan = :tipe_ruangan,
                    total_harga = :total_harga, 
                    status_bayar = :status_bayar 
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('atas_nama', $data['atas_nama']);
        $this->db->bind('tanggal_reservasi', $data['tanggal_reservasi']);
        $this->db->bind('jam_reservasi', $data['jam_reservasi']);
        $this->db->bind('tipe_ruangan', $data['tipe_ruangan']);
        $this->db->bind('total_harga', $data['total_harga']);
        $this->db->bind('status_bayar', $data['status_bayar']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }

    public function cariDataReservasi()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM reservasi WHERE atas_nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}