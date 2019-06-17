
<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 6:00 PM
 */
if (isset($_POST['btn_save'])){
    $inputedName = $_POST['x'];
    $inputedEmail = $_POST['y'];
    $inputedPassword = $_POST['z'];
    //connect to db
    $conn =mysqli_connect("localhost","root","","evening_system");
    //check if connection is successful

    if (!$conn){
        echo "connection faid";

    }else{
        //procced to save the db
        //start by creating the insert quary
        $insertQuery ="INSERT INTO `majina`(`id`, `jina`, `arafa`, `siri`) VALUES (null ,'$inputedName','$inputedEmail','$inputedPassword')";
        //check if connection quary is correct
        if (!$insertQuery){
            echo "Error in the querry";

        }else{
            //proceed to final save data
            $save =mysqli_query($conn,$insertQuery);
            //check if data was saved succesffully
            if (!$save){
                echo "saving failed";

            }else{
                echo "data saving successfully";
                //go back to saveuser location
                header('location:saveUser.php');
            }
        }
    }
}
?>