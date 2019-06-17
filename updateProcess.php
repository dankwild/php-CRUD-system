<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 6:43 PM
 */
if (isset($_POST['btn_update'])){
    $receive_id=$_POST['w'];
    $receive_name=$_POST['x'];
    $receive_email=$_POST['y'];
    $receive_password=$_POST['z'];
    //update to the db

    $conn =mysqli_connect("localhost","root","","evening_system");
    // check if the connwction is successful
    if (!$conn){
    echo "conection failed";}else{
        //proceed to update
        //start by creating the update query
        $updateQuery ="UPDATE majina SET jina='$receive_name',arafa='$receive_email',siri='$receive_password' WHERE id='$receive_id'";
        //check if the update is correct
        if (!$updateQuery){
            echo "error on the update query";

        }else{
            //proceed to finally update
            $update=mysqli_query($conn,$updateQuery);
            //check if the update was succesful
            if (!$update){
                echo "update faided";

            }else{
                echo "record successfully updated";
                //go back to viewuser.php to see the changes
                header('location:viewUsers.php');
            }
        }
    }
}




?>