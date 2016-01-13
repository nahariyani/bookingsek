<?php
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("bookingsek",$con);
    $query=mysql_query("select * from memberbs where nama LIKE '%{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['nama'];
    }
    echo json_encode($array);
?>