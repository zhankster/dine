<?php

require 'env.php';

class Connection {

    protected static $connection;

    function connect(){
        try {
        $host = $GLOBALS['db_host'];
        $db = $GLOBALS['db_name'];
        $user = $GLOBALS['db_user'];
        $pass = $GLOBALS['db_pass'];

        self::$connection= new PDO("mysql:host=$host;dbname=$db;charset=utf8",  $user, $pass);

        self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return self::$connection;
        }
        catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    function sel_json($sql){
        $encode = [];
        try{
            self :: $connection = $this->connect();
            $smnt = self :: $connection->prepare($sql);
            $smnt->execute();
            $result = $smnt->fetchAll(PDO::FETCH_ASSOC);
            $row_cnt = $smnt->rowCount();
        }
        catch(PDOException $e)
        {
            echo $sql . "<br />" . $e->getMessage();
        }
        //echo json_encode($result);
        echo json_encode($result);
        $connection = null;
    }   

    function update($sql){
        try{
            self :: $connection = $this->connect();
            $smnt = self :: $connection->prepare($sql);
            $smnt->execute();
            $row_cnt = $smnt->rowCount();
            //echo "New record created successfully";
        }
        catch(PDOException $e)
        {
            echo $sql . "<br />" . $e->getMessage();
            return 0;
        }

        $connection = null;
        return $row_cnt;
    }

}

function getServerTime(){

}
/*
$up = new Connection();

$cnt = $up->update("insert into dine.tables(table_id, capacity, area_id) values ('D1', 6, 2);");

echo $cnt;
*/

// $sel= new Connection();
// $sel->sel_json("select * from tables;");

?>