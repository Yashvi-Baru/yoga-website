<?php 

include 'connect.php';

if(isset($_POST['sumbit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $class=$_POST['drop'];
    $message=$_POST['message'];

     $checkEmail="SELECT * From booking where email='$email'";
     $result=$conn->query($checkEmail); 
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO booking (username,email,phone,class,message)
                       VALUES ('$username','$email','$phone','$class','$message')";
            if($conn->query($insertQuery)==TRUE){
                echo "successful";                
                header("location: index.html");
            }
            else{
                echo "no";
                echo "Error:".$conn->error;
            }
     }
   
}





