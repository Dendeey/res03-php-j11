<?php

abstract class AbstractManager
{
    
    // Attributs //
    
    protected PDO $db;
    
    private string $dbName;
    private string $port;
    private string $host;
    private string $username;
    private string $password;
    
    // Constructor //
    
    public function __construct(string $dbname, string $port, string $host, string $username, string $password)
    {
        $this->dbname = $dbname;
        $this->port = $port;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->db = new PDO(
                        "mysql:host=db.3wa.io;port=3306;dbname=davidsim_phpj11",
                        "davidsim",
                        "83c8b946aee433563583381d62aa9c15"
                        );
    }
    
    
}

?>