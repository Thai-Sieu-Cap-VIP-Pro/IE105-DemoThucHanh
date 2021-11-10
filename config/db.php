<?php
    define('HOST','localhost');
    define('DATABASE','shoemanagement');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    function execute ($sql){
        //create connection to database
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    
        //QUERY
        mysqli_query($conn, $sql);
        //close connect
        mysqli_close($conn);
    
    }
    
    
    function executeResult ($sql){
        //create connection to database
        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    
        //QUERY
        $resultset = mysqli_query($conn, $sql);
        $list = [];
        while ($row = mysqli_fetch_array($resultset,1)) {
            $list[] = $row;
        }
        //close connect
        mysqli_close($conn);
    
        return $list;
    
    }