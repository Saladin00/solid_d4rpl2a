<?php

class DBMSConnection {
    private DBMS $dbms;

    public function connect(DBMS $dbms): void {
        $this->dbms = $dbms;
        echo "Connected to " . get_class($this->dbms) . "\n";
    }
}


?>
