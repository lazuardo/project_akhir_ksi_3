<?php
    require('database/connection.php');
    $id= $_GET['id'];
    $query=mysqli_query($connect,"SELECT * FROM barang where id_barang=$id");
    $result=mysqli_fetch_assoc($query);
    var_dump($result);

?>