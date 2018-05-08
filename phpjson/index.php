<?php
//open connection to mysql db
    $connection = mysqli_connect("localhost","root","","e_store") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from tbl_employee";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }

    //var_dump($emparray);
    //print_r($emparray);

    echo json_encode($emparray);


    //write to json file
    $fp = fopen('empdata.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

?>