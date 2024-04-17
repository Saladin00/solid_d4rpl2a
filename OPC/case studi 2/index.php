<?php

class DBMSConnection {
    private DBMS $dbms;

    public function connect(DBMS $dbms): void {
        $this->dbms = $dbms;
        echo "Connected to " . get_class($this->dbms) . "\n";
    }
}

// Define the DBMS class
class DBMS {
    public function createConnection(): void {
        echo "Koneksi ke DBMS Berhasil \n";
    }
}

// Define the MySQL class extending DBMS
class MySQL extends DBMS {
    public function createConnection(): void {
        echo "Koneksi ke MySQL berhasil\n";
    }
}

// Define the MongoDB class extending DBMS
class MongoDB extends DBMS {
    public function createConnection(): void {
        echo "Koneksi ke MonggoDB berhasil\n";
    }
}

// Instantiate DBMSConnection
$connection = new DBMSConnection();

// Instantiate MySQL and MongoDB
$mysql = new MySQL();
$mongodb = new MongoDB();

// Connect to MySQL and MongoDB using DBMSConnection
$connection->connect($mysql);
$connection->connect($mongodb);

?>
