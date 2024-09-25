<?php
// $newconnection = new Connection();

Class Connection{
    private $server = "mysql:host=localhost;
    dbname=maicadb";
    private $user =  "pass";
    private $pass = "";
    private $option = array(PDO::ATTR_ERRMODE =>
    PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE 
    =>PDO::FETCH_OBJ);
    protected $con;

    public function openConnection()
    {
        try
        {
            $this->con = new PDO($this->server,$this->user,$this->pass,
            $this->option);
            return $this->con;
        } catch (PDOException $th){
            echo "There is a problem in the connection:".$th->getMessage();
        }

    }
    public function classConnection(){
        $this->con = null;
    }

}
