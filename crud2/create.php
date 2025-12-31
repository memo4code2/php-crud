<?php


if(isset($_POST['BtnInsert'])) :
    ($_POST['fname']);
    ($_POST['lname']);
    ($_POST['phone']);
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    
   

//  INSERT

    $sql= "INSERT INTO users (fname,lname,phone) VALUES ('$fname','$lname','$phone') ";
    mysqli_query($conn,$sql);

    

endif;


// if(isset($_POST['BtnDelete'])){
//         $Query= "DELETE FROM user WHERE  ='$fname'";
//         mysqli_query($conn,$Query);
     
//     }

    $Show= mysqli_query($conn,"SELECT * FROM users")  ;


if(isset($_POST['Update'])){

    // $Update= mysqli_query("UPDATE `users` SET `ID`='[value-1]',`fname`='[value-2]',`lname`='[value-3]',`phone`='[value-4]' WHERE 1");

}





