<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 5:44 PM
 */

if (isset($_GET['id_yetu'])){
    $receive_id =$_GET ['id_yetu'];
    //connect to the db a record under the receive id row
    $conn =mysqli_connect("localhost","root","","evening_system");
    //check if the connection is successful
    if (!$conn){
        echo "connection failed";

    }else{
        //procede to delete
        //start with the delete query
        $deleteQuery = "DELETE FROM majina WHERE id =$receive_id";
        //check if the deleted query is correct
        if (!$deleteQuery){
            echo "error on the deleted query";

        }else{
            //finally proceed to to delete
            $delete = mysqli_query($conn,$deleteQuery);
            //check if deleted was successuful
            if (!$delete){
                echo "deleting failed";

            }else{
                echo "record deleted successefully";
                //go back to viewuser.php to see if the file i
                header('location:viewUsers.php');
            }

        }
    }
}



?>