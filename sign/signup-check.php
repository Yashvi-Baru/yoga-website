<?php 

include 'db_conn.php';

if(isset($_POST['signup'])){
    $uname=$_POST['uname'];
    $name=$_POST['name'];
    $password=$_POST['password'];

     $checkEmail="SELECT * From users where name='$name'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users (user_name,password,name)
                       VALUES ('$uname','$name','$password')";
            if($conn->query($insertQuery)==TRUE){
                echo "successful";                
                header("location: ../index.html");
            }
            else{
                echo "no";
                echo "Error:".$conn->error;
            }
     }
   

}
else{
	echo "no";
}
