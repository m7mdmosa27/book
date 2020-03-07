<?php 
	session_start();
    require_once('confg.php');


?> 
<!DOCTYPE HTML>
<html>

        <?php 
            require_once('header.php');
        ?> 

            <br><br>
            <?php 
		          # code...
                        /*$getuser = "SELECT imageFile FROM books ";
                        $eMail=mysqli_query($connection,$getuser);
                        $result =mysqli_fetch_all($eMail);
                        foreach ($result as $key => $value) {
                            # code...
                            
    		                echo "<div class='mybook' id='mybook'>"."<a href='#' target='_blank'> ". "<img src='".$value[0]."' > " ." </a>";

    		                echo "</div>";
                        }*/
                        $getimage   = "SELECT * FROM books" ;
                        $imagesql   = mysqli_query($connection,$getimage);
                        $result     = mysqli_fetch_all($imagesql);
                        foreach ($result as $key => $value) {
                            # code...
                            
                            echo "<div class='mybook' id='mybook'>"."<a href='".$value[4]."' target='_blank'> ". "<img src='".$value[2]."' > " ." </a>";

                            echo "</div>";
                        }
		?>    
        
        </div>
        <br>
        <br>
        <script type="text/javascript" src="javascript/js.js"></script>
</body>
</html>