<?php
	
// **********************************       this function for rebild book's page       ******************************************

function difinbook($nameOfimage,$scart,$booksAuthor,$diraction)
{
    $nameOfimage='../'.$nameOfimage;
    $header="<?php function login(){
        # code...
        if(isset(\$_SESSION['user'])){return('<li><a href=\"../logout.php\">');} else{return'<li><a href=\"../login2.php\">';} }
     function login2(){
        # code...
         if (isset(\$_SESSION['user'])) { return\"logout</a></li>\";} else{return \"login</a></li>\";} }
     function sign(){
        # code...
        if(isset(\$_SESSION['user'])){return('');}else{return'<li><a href=\"../sign-up.php\">';}}
     function sign2(){
        # code...
        if (isset(\$_SESSION['user'])) { return \"\";}else{return \"sigin</a></li>\";}}
    echo \"<head>
            <meta charset=\\\"utf-8\\\">
            <title>mybook</title>
            <link rel=\\\"stylesheet\\\" type=\\\"text/css\\\" href=\\\"../style/normalize.css\\\">
            <link rel=\\\"stylesheet\\\" type=\\\"text/css\\\" href=\\\"../style/style.css\\\">
        </head>
        <body>
        <div class=\\\"countenr\\\">\";
    echo \"  <header>
                <div><span><span>R</span>ead &#160 </span>m<span>e</span></div>
               <!-- <div ><img id=\\\"bird\\\" src=\\\"data/bird1.png\\\"></div>
                <div><img id=\\\"monkeyfun\\\" src=\\\"data/monkeyfun2.png\\\"></div> -->
            </header>
            <nav>
                <ul>
                    <li><a href=\\\"../index.php\\\">Home</a></li>
                    <li><a href=\\\"#\\\">Director</a></li>
                    <li><a href=\\\"../readme.php\\\">Books</a></li>
                    \". login(). login2() .\"
                    \". sign() . sign2() .\"
                    <li><a href=\\\"../contact.php\\\">Contact</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <br>\"; ?>";
    $difinbook= "<!DOCTYPE html>
                
                <html>"

                .$header. " <div>
                    <img style=\"width: 236px; height: 363px; float: left;\" src=\"".$nameOfimage."\">". "    <p style=\"background: #ddd;display: inline-block;padding: 10px; margin: 10px; \" id=\"scrap\">".$scart."</p>  <span style=\"background: #ddd;padding: 10px; margin: 10px; position: \">".$booksAuthor." </span>       </div>
                    </div>
                </html>";

    return file_put_contents($diraction,$difinbook);
}

// *******************************************************************************************************************************


session_start() ;    // for start session 
if (isset($_SESSION['user'])) {
    require_once('confg.php');     // for conniction 

    //*************************************************************************************************************************
    // ***********                                                                                                  ***********    
    // ********                                                                                                        ********
    // *****                                                                                                              *****
    // ***                                                                                                                  ***
    //                                                        Insert data
    // ***                                                                                                                  ***
    // ******                                                                                                             *****
    // ********                                                                                                        ********
    // ***********                                                                                                  ***********    
    // ************************************************                         ***********************************************


    if (isset($_POST['InsertData'])) {
        # code...

        $title      = $_POST['nameOfBook'];
        $nameOfDir  = $_POST['nameOfDir'];
        $image_dir  = "data/image/";
        $imageName  = $_FILES["image"]["name"];
        $fileName   = $_FILES["file"]["name"];
        echo" <pre>";
        print_r($_FILES);
        echo" </pre>";
        $image_file = $image_dir . basename($imageName);
        $scart      = $_POST['textarea'];
        $nameOfPage = pathinfo($imageName,PATHINFO_FILENAME);
        $diraction  = 'book/'.$nameOfPage.'.php';
        $typeFile   = pathinfo($fileName,PATHINFO_EXTENSION);
        $typeImage  = $_FILES["image"]["type"];
        echo substr($typeImage,0,5);

        // ***************************  Check if file already exists  ***************************
        
        if (file_exists($image_file)) {
            echo "Sorry, file already exists.";
            echo "<script> window.alert(' Sorry, file already exists.')</script> ";
            header('REFRESH:0;URL=readme.php');
        }

        // ********************************** Check file size  **********************************
        
        else{
            
            if ($_FILES["image"]["size"] > 1000000) {
                echo "Sorry, your file is too large.";
                echo "<script> window.alert(' Sorry, your file is too large.')</script> ";
                header('REFRESH:0;URL=readme.php');
            }

            else{

                // ***************************** moave image in my data *****************************

                if (substr($typeImage,0,5)=='image'){
                    $getnameimage = "SELECT nameOfBook FROM books WHERE nameOfBook='$title' ";
                    $nameimage=mysqli_query($connection,$getnameimage);
                    if (mysqli_num_rows($nameimage)==0){
                        # code...
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)){
                                $insertSql= "INSERT INTO books(nameOfBook,imageFile,nameOFDir,bookDir) VALUES ('$title','$image_file','$nameOfDir','$diraction')";
                                mysqli_query($connection,$insertSql);
                                difinbook($image_file,$scart,$title,$diraction);
                                $_SESSION['myimage']=$image_file;
                                $_SESSION['mytitle']=$title;
                                header('REFRESH:-1;URL=index.php');
                        } 
                        else {
                            echo "Sorry, there was an error uploading your file.";
                            echo "<script> window.alert(' Sorry, there was an error for uploading your file.')</script> ";
                            header('REFRESH:0;URL=readme.php');
                        }
                    }else{
                        echo "<script> window.alert(' Sorry, The name is already exisit.')</script> ";
                        header('REFRESH:0;URL=readme.php');
                    }
                }
            }

            // ****************************** chack, is file pdf or image ********************************* 

            if($typeFile=='pdf'){
                $pdfFile="data/file/".basename($fileName);
                if (move_uploaded_file($_FILES["file"]["tmp_name"], $pdfFile)){
                    $updateSqlfile=" UPDATE books SET fileDir='$pdfFile' WHERE nameOfBook='$title' ";
                    mysqli_query($connection,$updateSqlfile);
                }
            }

            // ********************************************************************************************   
        }        
    }


    //*************************************************************************************************************************
    // ***********                                                                                                  ***********    
    // ********                                                                                                        ********
    // *****                                                                                                              *****
    // ***                                                                                                                  ***
    //                                                        Delet data
    // ***                                                                                                                  ***
    // ******                                                                                                             *****
    // ********                                                                                                        ********
    // ***********                                                                                                  ***********    
    // ************************************************                         ***********************************************

    if (isset($_POST['DeletData'])){

        $nameOfDelet=$_POST['nameOfBook'];
        $getdirimage = "SELECT imageFile,fileDir,bookDir FROM books WHERE nameOfBook='$nameOfDelet' ";
        /*$dirimage=mysqli_query($connection,$getdirimage);
        $resultOfDir =mysqli_fetch_assoc($dirimage);
        //echo "<br> ".$result["imageFile"] ;
        $getimage   = "SELECT * FROM books " ;*/
        $imagesql   = mysqli_query($connection,$getdirimage);
        $result     = mysqli_fetch_assoc($imagesql);
        if(unlink($result['imageFile']) && unlink($result['fileDir']) && unlink($result['bookDir']) ){
            $deletSql=" DELETE FROM books WHERE nameOfBook='$nameOfDelet' ";
            $delet=mysqli_query($connection,$deletSql);   
            //echo "deleting";
        }else{
            echo "error";
        }

    }

    // ************************************************************************************************************************
    // ***********                                                                                                  ***********    
    // ********                                                                                                        ********
    // *****                                                                                                              *****
    // ***                                                                                                                  ***
    //                                                        Update Data
    // ***                                                                                                                  ***
    // ******                                                                                                             *****
    // ********                                                                                                        ********
    // ***********                                                                                                  ***********    
    // ************************************************                         ***********************************************



    if (isset($_POST['UpdataData'])) {
        $nameOfUpdata=$_POST['nameOfBook'];
        $NewName=$_POST['NewNameOfBook'];
        if (isset($_POST['NewNameOfDir'])) {
            $NewDir=$_POST['NewNameOfDir'];
            $updateSqldir=" UPDATE books SET nameOFDir='$NewDir' WHERE nameOfBook='$nameOfUpdata' ";
            mysqli_query($connection,$updateSqldir);
        }
       
        $updataSql=" UPDATE books SET nameOfBook='$NewName' WHERE nameOfBook='$nameOfUpdata' ";
        mysqli_query($connection,$updataSql);
    }



    // ************************************************************************************************************************
    // ***********                                                                                                  ***********    
    // ********                                                                                                        ********
    // *****                                                                                                              *****
    // ***                                                                                                                  ***

    // ***                                                                                                                  ***
    // ******                                                                                                             *****
    // ********                                                                                                        ********
    // ***********                                                                                                  ***********    
    // ************************************************************************************************************************



    
}
else{
    echo "<script> window.alert(' sorry :( you not allowed to be here ')</script> ";
    header('REFRESH:0;URL=login2.php');
}
?>



<!DOCTYPE html>
<html>
        <?php 
            require_once('header.php');
        ?> 
        <div class="forms">

            <!-- *******************************************  Out Box ===> HTML <===   ******************************************* -->

            <fieldset style="   box-shadow      : 0px 4px 10px #001c7a,0px -4px 10px #001c7a; 
                                background      : #aaa;
                                border-radius   : 30px;
                                padding: 15px 80px 80px 80px;
                            ">
                <legend style=" background      : #ddd; 
                                padding         : 7px 40px; 
                                border-radius   : 10px; 
                                margin          : 0   100px ;
                                box-shadow: 0px 4px 10px #001c7a, 0px -4px 10px #001c7a;
                                "> form </legend>
                <div class="radioData" style="margin-bottom: 30px;">
                    <span style=" margin: 0   10% ;">Insert</span><input type="radio" name="controlData" value="insert" id="insert">
                    <span style=" margin: 0   10% ;">Updata</span><input type="radio" name="controlData" value="updata" id="updata">
                    <span style=" margin: 0   10% ;">Delet </span><input type="radio" name="controlData" value="delet"  id="delet" >
                </div>
                <div class="box">




                    <!-- **************************  Insert Box ===> HTML <===   ***************************** -->



                    <div class="insertData">
                        <form method="post" enctype="multipart/form-data">
                            <input type="text" name="nameOfBook" id="nameOfBookInsert" placeholder="enter name of book" required><br>
                            <input type="text" name="nameOfDir" id="nameOfDir" placeholder="enter name of director" ><br>
                            <input type="text" name="textarea" placeholder="enter scrap for book">
                            <input type="File" name="image" id="image" accept="image/*">
                            <label for="image"><div>Choose Image</div></label>
                            <input type="File" name="file" id="file" accept="application/pdf" >
                            <label for="file"><div>Choose file</div></label>
                            <input type="submit" id="InsertData" name="InsertData" value="Insert"><br>
                        </form>
                    </div> 

                    <!-- *********************************************************************************** -->


                    <!-- **************************  Delet Box ===> HTML <===  ***************************** -->



                    <div class="deletData">
                        <form method="post" enctype="multipart/form-data" >
                            <div>
                                <?php 
                                    $getimage   = "SELECT nameOfBook FROM books" ;
                                    $imagesql   = mysqli_query($connection,$getimage);
                                    $result     = mysqli_fetch_all($imagesql); 
                                    foreach ($result as $key => $value) {
                                        # code...
                                        echo " <span> ".$value[0]. " </span>";
                                    }

                                    mysqli_close($connection);  // to close the connection between the database and php 

                                ?>
                            
                            </div>
                            <input type="text" name="nameOfBook" id="nameOfBookDelet" placeholder="enter name of book"  required><br>
                            <input type="submit" id="DeletData" name="DeletData" value="DELETE" ><br>
                        </form>
                    </div>

                    <!-- ************************************************************************************** -->


                    <!-- ****************************  Update Box ===> HTML <===  ***************************** -->



                    <div class="updataData">
                        <form method="post" enctype="multipart/form-data">
                            <input type="text" name="nameOfBook" id="nameOfBookUpdate" placeholder="enter name of book"  required><br>
                            <input type="text" name="NewNameOfBook" id="NewNameOfBook" placeholder="enter New name of book"  required><br>
                            <input type="text" name="NewNameOfDir" id="NewNameOfDir" placeholder="enter new name of director" ><br>
                            <input type="submit" id="UpdataData" name="UpdataData" value="Update"><br>
                        </form>
                    </div>

                    <!-- *********************************************************************************** -->


                </div>
            </fieldset>
        </div>

        </div>
        <script type="text/javascript" src="javascript/js.js"></script>  
    </body>

</html>
