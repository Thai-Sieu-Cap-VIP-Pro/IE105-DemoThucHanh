<?php
    $id = $_GET['id'];

    $sql = "delete from products where prd_id = ".$id;

    execute($sql);

    header('location: index.php?page_layout=danhsach');
?>