<?php


    if(!empty($_GET['idunver']))
    {
        include_once('config.php');

        $id = $_GET['idunver'];

        $select = "SELECT *  FROM universidade WHERE idunver=$id";

      $result = mysqli_query($mysqli, $select);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM universidade WHERE idunver=$id";
            $resultDelete = $mysqli->query($sqlDelete);
        }
    }
   
   
    header('location:univiews.php');
?>



