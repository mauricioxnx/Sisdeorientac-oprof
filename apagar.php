<?php


    if(!empty($_GET['id']))
    {
        include_once('config.php');

        $id = $_GET['id'];

        $select = "SELECT *  FROM usuario WHERE id=$id";

      $result = mysqli_query($mysqli, $select);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuario WHERE id=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
   
   
    header('location:admin_page.php');
?>



