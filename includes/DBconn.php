<?php

class DBconnection{

    protected $db;

 public function getConnection()
    {
       return $this->connect();
    }

  public function connect(){
   
    $conn = NULL;

        try{
            $conn = new PDO("mysql:host=sql.freedb.tech;dbname=freedb_mildsheet", "freedb_milds", "s&g7Mc%8W#FUmde");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }   
            $this->db = $conn;

            return $this->db;
    }
   
  }
//@Brian Msyamboza
