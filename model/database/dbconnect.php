<<<<<<< HEAD
<?php
namespace model\database;
use \PDO;

class dbconnect {
    private $db;
    // private $log;

    function __construct($config) {
        $host = $config['db']['host'];
        $username = $config['db']['username'];
        $password = $config['db']['password'];
        $database = $config['db']['name'];

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
        } 
        catch(PDOException $e) {
            $this->log->error("Could not connect to $database db: " . $e->getMessage());
            die();
        }
    }

    public function query($select){
        $result = $this->db->query($select);
        return $result;
    }

    public function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    
}

=======
<?php
namespace model\database;
use \PDO;

class dbconnect {
    private $db;
    // private $log;

    function __construct($config) {
        $host = $config['db']['host'];
        $username = $config['db']['username'];
        $password = $config['db']['password'];
        $database = $config['db']['name'];

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully"; 
        } 
        catch(PDOException $e) {
            $this->log->error("Could not connect to $database db: " . $e->getMessage());
            die();
        }
    }

    public function query($select){
        $result = $this->db->query($select);
        return $result;
    }

    public function exec($query)
    {
        $result = $this->db->exec($query);
        return $result;
    }
    
}

>>>>>>> b131e3337ca20ff99a98e6a25ce0e3ed956fe21f
?>