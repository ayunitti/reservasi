<?php

class userAdmin_model {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllUser()
    {
      $this->db->query('SELECT * FROM ' . $this->table);
      return $this->db->resultSet();
    }

    public function getUserLimit3()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 3');
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO $this->table
                    (nama, email, password, akses)
                    VALUES
                  (:nama, 
                  :email, 
                  :password,
                  :akses)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('akses', $data['akses']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM user WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data)
    {
        $query = "UPDATE user SET
                    nama =  :nama, 
                    email = :email,
                    password = :password,
                    akses = :akses
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('akses', $data['akses']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
        
    }
}