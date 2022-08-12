<?php
    include('./db_connect.php');
    if(isset($_GET['Del']))
    {
        $loanID = $_GET['Del'];
        $query = " DELETE from loans where loan_ID ='".$loanID."'";
        $result = mysqli_query($conn,$query);


        if($result)
        {
            header("location:index.php?page=loans");
        }
        else{
            echo 'Please Check Your Query';
        }
    }
?>