<?php


class Database {
    //input data dari config
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;

    private $dbh; //database handler
    private $stmt; //statement


    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;

        //Optimasi koneksi ke database
        $option = [
            PDO::ATTR_PERSISTENT => true, //koneksi database terjaga terus
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }


    //function untuk menjalankan query atau mempersiapkan query
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    //binding data
    public function bind($param, $value, $type = null) {
        if( is_null($type)) {
            switch (true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }


    //eksekusi data
    public function execute() {
        $this->stmt->execute();
    }

    //menampilkan data banyak
    public function resultSet() {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //menampilkan beberapa data
    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    //menghitung berapa banyak baris menggunakan angka
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}