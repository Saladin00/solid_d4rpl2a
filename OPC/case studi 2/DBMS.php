<?php

class DBMS {
    public function createConnection(): void {
        echo "Koneksi ke DBMS berhasil\n";
    }
}

class MySQL extends DBMS {
    public function createConnection(): void {
        echo "Koneksi ke MySQL berhasil\n";
    }
}

class MongoDB extends DBMS {
    public function createConnection(): void {
        echo "Koneksi ke MongoDB berhasil\n";
    }
}



?>
