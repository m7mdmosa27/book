<?php 
/*$x='../data/image/HP_pb_new_6.jpg';
$header="<?php 
function login()
{
	# code...
	if(isset(\$_SESSION['user'])){return('<li><a href=\"logout.php\">');} else{return'<li><a href=\"login2.php\">';} 
}
 function login2()
{
	# code...
	 if (isset(\$_SESSION['user'])) { return\"logout</a></li>\";} else{return \"login</a></li>\";} 
}
 function sign()
{
	# code...
	if(isset(\$_SESSION['user'])){return('');}else{return'<li><a href=\"sign-up.php\">';}
}function sign2()
{
	# code...
	if (isset(\$_SESSION['user'])) { return \"\";}else{return \"sigin</a></li>\";}
}
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
            <div ><img id=\\\"monkeyfun\\\" src=\\\"data/monkeyfun2.png\\\"></div> -->
        </header>
        <nav>
            <ul>
                <li><a href=\\\"index.php\\\">Home</a></li>
                <li><a href=\\\"#\\\">Director</a></li>
                <li><a href=\\\"readme.php\\\">Books</a></li>
                \". login(). login2() .\"
                \". sign() . sign2() .\"
                <li><a href=\\\"contact.php\\\">Contact</a></li>
            </ul>
        </nav>
        <br>
        <br>
        <br>\"; ?>";
$difinbook= "<!DOCTYPE html>
			
			<html>"

			.$header. "	<div>
				<img style=\"width: 236px; height: 363px; float: left;\" src=\"".$x."\">". "	<p style=\"background: #ddd;display: inline-block;padding: 10px; margin: 10px; \" id=\"scrap\">"."</p>". "	<span style=\"background: #ddd;padding: 10px; margin: 10px; position: \">"." </span>". "		</div>
				</div>
			</html>";

$dir='book/';
$nameOfPage='text';
$diraction=$dir.$nameOfPage.'.php';
file_put_contents($diraction,$difinbook);*/

?>


<label for="image" style="  padding: 10px;
                            margin: 10px 0 15px 0;
                            background-color: #b80;
                            box-shadow: 0px 4px 10px #000,0px -4px 10px #000; 
                            border-radius: 10px;
                            text-align: center;">Choose Image</label><br>
<input type="File" name="image" id="image" accept="image/*" style="display: none;" >
