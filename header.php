<?php
function login()
{
	# code...
	if(isset($_SESSION['user'])){return('<li><a href="logout.php">');} else{return'<li><a href="login2.php">';} 
}
 function login2()
{
	# code...
	 if (isset($_SESSION['user'])) { return"logout</a></li>";} else{return "login</a></li>";} 
}
 function sign()
{
	# code...
	if(isset($_SESSION['user'])){return('');}else{return'<li><a href="sign-up.php">';}
}function sign2()
{
	# code...
	if (isset($_SESSION['user'])) { return "";}else{return "sigin</a></li>";}
}
echo "<head>
        <meta charset=\"utf-8\">
        <title>mybook</title>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style/normalize.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"style/style.css\">
        <link href=\"//db.onlinewebfonts.com/c/c2f7638be87032cd75a21eeceffd56bd?family=French+Script+MT\" rel=\"stylesheet\" type=\"text/css\"/>
        <link href=\"//db.onlinewebfonts.com/c/c144af7d488f9069913d40dee3cd1f70?family=Algerian\" rel=\"stylesheet\" type=\"text/css\"/>
    </head>
    <body>
    <div class=\"countenr\">";
echo "  <div ><header>
            <div><span><span class=\"frenchstyle\">O</span>pen &#160<span class=\"frenchstyle\">B</span>ook</span></div>
           <!-- <div ><img id=\"bird\" src=\"data/bird1.png\"></div>
            <div ><img id=\"monkeyfun\" src=\"data/monkeyfun2.png\"></div> -->
        </header>
        <nav>
            <ul>
                <li><a href=\"index.php\">Home</a></li>
                <li><a href=\"#\">Director</a></li>
                <li><a href=\"readme.php\">Books</a></li>
                <li><a href=\"contact.php\">Contact</a></li>
                ". login(). login2() ."
                ". sign() . sign2() ."
            </ul>
        </nav></div>
        <br>
        <br>
        <br>";
?>