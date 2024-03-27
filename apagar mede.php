<?php


    if(!empty($_GET['idmed']))
    {
        include_once('config.php');

        $id = $_GET['idmed'];

        $select = "SELECT *  FROM medio WHERE idmed=$id";

      $result = mysqli_query($mysqli, $select);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM medio WHERE idmed=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
   
   
    header('location:medeviews.php');
?>



