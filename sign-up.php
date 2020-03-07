<?php

if (isset($_POST['signUp'])){
    
    require_once('confg.php');
    $fristname=$_POST['frist-name'];
    $lastname=$_POST['last-name'];
    $email=$_POST['e-mail'];
    $phonenumber=$_POST['phone-number'];
    $passWord=$_POST['password'];

    if(!empty($fristname) and !empty($lastname) and !empty($email) and !empty($passWord)){

        $getuser = " SELECT * FROM users WHERE email='".$email."' " ;
        $user=mysqli_query($connection,$getuser);
        
        if (mysqli_num_rows($user)>0) {

            echo "<h1 style='color:red'> Sorry.. :(  this e-mail is Existing </h1>";
        }else{

            $p="INSERT INTO users (firstname, lastname, email, phonenumber, password) VALUES ('$fristname', '$lastname', '$email', '$phonenumber', '$passWord')";
            mysqli_query($connection,$p);

            echo "<h1 style='color:red'> Good ... now you be member in readme </h1>";
            header('REFRESH:0;URL=index.php');

        }



    }else{
        echo "<h1 style='color:red'> Sorry.. :(  Please Enter Your Data </h1>";
        header('REFRESH:0;URL=page/sign-up.php');
    }



mysqli_close($connection);
}

?>

<!DOCTYPE html>
<html>
        <?php 
            require_once('header.php');
        ?> 


        <form  method="POST">
            <div class="signupbox">
            <h1>sign up here </h1>
            <div><input type="text" name="frist-name" id="fristname" placeholder="  Enter Your Frist Name" required></div>
            
            <div><input type="text" name="last-name" id="lastname" placeholder="  Enter Your Last Name" required></div>
            <br>
            <br>
            <div><input type="email" name="e-mail" id="e-mail"  placeholder="  Enter Your E-mail" required></div>
            
            <div><input type="password" name="password" id="password" placeholder="  Enter Your Password " required></div>
            
            <div><input type="password" name="password" id="confirmpass" placeholder="  Enter Your Password again " required></div>
            <label id="chak"></label>
            
            <div><input type="text" name="phone-number" id="phonenumber" placeholder="  Enter Your Phone Number"></div>
            
            <div><input type="submit" id="button" name="signUp" value="Sign Up"></div>
            
            
            </div>
        </form>
        
    </div> 
    <script type="text/javascript" src="javascript/js.js"></script> 
    </body>

</html>