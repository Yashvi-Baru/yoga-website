

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <!-- <span class="big-circle"></span> -->
      <!-- <img src="img/shape.png" class="square" alt="" /> -->
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Book your class Now!!</h3>
          <p class="text">
            Embrace the journey of self-discovery and growth. 
            Join us today to embark on a path of wellness and empowerment.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Ahmedabad</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>asana@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>JOIN NOW </p>
           
          </div>
        </div>

        <div class="contact-form">
          <!-- <span class="circle one"></span>
          <span class="circle two"></span> -->

          <form action="index.php" method="POST" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" placeholder="UserName" />
              <!-- <label for="">Username</label> -->
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="email"/>
              <!-- <label for="">Email</label> -->
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder="Phone" />
              <!-- <label for="">Phone</label> -->
              <span>Phone</span>
            </div>
            <div class="input-container">
              <select name="class" id="class" class="input">
                <option value="">Choose the class:</option>
                <option value="Yoga">Yoga</option>
                <option value="Aerobics">Aerobics</option>
                <option value="Meditation">Meditation</option>
                <option value="Karate">Karate</option>                        
                <option value="Spiritual Yoga">Spiritual Yoga</option>
             </select>
            </div>
          
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
              <!-- <label for="">Message</label> -->
              <span>Message</span>
            </div>
            <button name="submit" class="btn">Submit</button>
            <!-- <input type="submit" value="submit" class="btn" name="submit" /> -->
          </form>
        </div>
      </div>
    </div>

    <script src="new/app.js"></script>
  </body>
</html>

<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $class=$_POST['class'];
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
                header("location: index.php");
            }
            else{
                echo "no";
                echo "Error:".$conn->error;
            }
     }
   

}
?>


