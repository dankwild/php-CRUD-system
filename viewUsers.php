<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>user page</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <a href="saveUserProgress.php" class="btn btn-dark fixed fixed-top">add user</a>
</head>

<table class="table table-hover table table-dark">

    <tr>
        <th>name</th>
        <th>email</th>
        <th>delete</th>
        <th>update</th>
    </tr>


<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 6:42 PM
 */
//connect to the Db
$conn =mysqli_connect("localhost","root","","evening_system");
if (!$conn){
    echo "connection failed";

}else{
    //proceed to fecth data from the db
    //start by creating the select quary
    $selectQuery= "SELECT * FROM majina";
    //check if the querry is correct
    if (!$selectQuery){
        echo "error on the select query";

    }else {
        //fetch data finally
        $fetch = mysqli_query($conn, $selectQuery);
        while ($row = mysqli_fetch_assoc($fetch)) {
            extract($row);
            echo "
            <tr>  
                <td>$jina</td>
                <td>$arafa</td>
                <td><a href='delete.php?id_yetu=$id' class='btn btn-danger'>Delete</a></td>
                <td><a href='update.php?id_yetu=$id&jina_yetu=$jina&arafa_yetu=$arafa&siri_yetu=$siri' class='btn btn-primary'>Update</a></td> 
            </tr>
            ";
        }
    }
}


?>
</table>
</body>
</html>





