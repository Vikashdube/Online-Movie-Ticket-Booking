<?php

 class connect {

    public $hostname = "";
    public $username = "";
    public $password = "";
    public $database = "";


    public $conn;

    function __construct()
    {

        $this->conn = new mysqli("localhost","root","","movies_tickets_booking");

        if($this->conn->connect_error){
            die("connection Failed");
        }
        // else{
        //     echo "Connected";
        // }
        
    }
    function select_all($table_name)
    {
        $sql = "SELECT * FROM `$table_name`";
         $result=$this->conn->query($sql);


        return $result;
      }

      function select_movie($table_name,$date)
      {
          $sql = "SELECT * FROM `$table_name` WHERE `rel_date` >now()";
           $result=$this->conn->query($sql);
  
  
          return $result;
        }


//                  dff

function select_movi($table_name,$date)
      {
          $sql = "SELECT * FROM `$table_name` WHERE `rel_date` <now()";
           $result=$this->conn->query($sql);
  
  
          return $result;
        }










  function select($table_name,$id){

    $sql ="SELECT * FROM `$table_name` where  id = $id";
    $result = $this->conn->query($sql);
    return $result;

 }

 function insert($query){

    if($this->conn->query($query)===TRUE){
        echo "inserted";
    }

    
 }
 
 }
?>