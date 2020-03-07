
<?php

if (isset($_POST['login'])) {
    require_once('confg.php');
    session_start();
    $email=$_POST['email'];
    $passWord=$_POST['password'];
    echo "i am here in login";
    if (!empty($email) and !empty($passWord)) {
        # code...
        echo "  hiiii";
        echo $email." ".$passWord ;


        /*********************************** this code for chak email from database   ****************************************************/


        $getuser = "SELECT email FROM users WHERE email='$email'";
        $eMail=mysqli_query($connection,$getuser);
        $result =mysqli_fetch_assoc($eMail);
        echo "<br> ". $result['email'] . " <br>";

        if(mysqli_num_rows($eMail)>0){
            echo "email is verifed";


            /********************************* this code for chak password    ***************************************/


            $row = "SELECT  password FROM users WHERE password='$passWord' ";
            $pass=mysqli_query($connection,$row);
            if(mysqli_num_rows($pass)>0){
                echo "password is verifed";
                
                $_SESSION['user']=$result['email'];
                printf($_SESSION['user']);
                echo "<script> window.alert('you are login')</script> ";
                header('REFRESH:1;URL=index.php');
            }
            else{
                echo "Not found password ";


            /*********************************************************************************************************/    


            }
        }
        else{
            echo "NOT found E-mail ";
        }


        /***********************************************************************************************************************************/
    }
    else{
            echo "NOT found";}
mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html>
        <?php 
            require_once('header.php');
        ?> 
        <div class="loginbox">
            <form action="Login2.php" method="POST">
                <div class="signupbox">
                    <h1>Sign In</h1>
                    <br>
                    <br>
                    <div><input type="email" name="email" id="e-mail" placeholder="  Enter Your E-mail" ></div>
                    <br>
                    <br>
                    <div><input type="password" name="password" id="password" placeholder="  Enter your Password" ></div>
                    <br>
                    <br>                                      
                    <br>
                    <div><input type="submit" id="button" name="login" value="sign in" ></div>
                </div>
            </form>
        </div>
        <br>
    </div>
    <script type="text/javascript" src="javascript/js.js"></script>        
</body>
</html>