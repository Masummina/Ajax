<?php 

include('./config/config.php');


/**
 * Database
 */
class database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public $link;
    public $error;
    
    function __construct()
    {
        $this->dbconnect();
    }

    public function dbconnect(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if(!$this->link){
                $this->error = "Connection fail".$this->link->connect_error;
            }else{
                echo "Yes connected";
            }
    }

}



?>