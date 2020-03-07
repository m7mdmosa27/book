<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style/normalize.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <style type="text/css">
    	.sent input [type="text"]{
		    width: 350px;
		    height: 200px;
		}
    </style>
</head>
<body>
      <?php 
        require_once('header.php');
      ?> 
       <div id="h1" >
	       	<h2>Hi sir We are happy for you stiling with us </h2><br>
	       	<h2>We ready for any Question or any explained</h2>
       </div>
       <div class="contact">
          <form method="post" class="sent">
            <textarea name="textFromClint" placeholder="you can write here...." rows="6" cols="35" ></textarea>
           	<br><br>
           	<input type="submit" name="sent" value="Sent">
          </form>
       </div>
    </div>
    <script type="text/javascript" src="javascript/js.js"></script>

</body>
</html>
