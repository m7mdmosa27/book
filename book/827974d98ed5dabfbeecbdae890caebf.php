<!DOCTYPE html>
                
                <html><?php function login(){
        # code...
        if(isset($_SESSION['user'])){return('<li><a href="../logout.php">');} else{return'<li><a href="../login2.php">';} }
     function login2(){
        # code...
         if (isset($_SESSION['user'])) { return"logout</a></li>";} else{return "login</a></li>";} }
     function sign(){
        # code...
        if(isset($_SESSION['user'])){return('');}else{return'<li><a href="../sign-up.php">';}}
     function sign2(){
        # code...
        if (isset($_SESSION['user'])) { return "";}else{return "sigin</a></li>";}}
    echo "<head>
            <meta charset=\"utf-8\">
            <title>mybook</title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"../style/normalize.css\">
            <link rel=\"stylesheet\" type=\"text/css\" href=\"../style/style.css\">
        </head>
        <body>
        <div class=\"countenr\">";
    echo "  <header>
                <div><span><span>R</span>ead &#160 </span>m<span>e</span></div>
               <!-- <div ><img id=\"bird\" src=\"data/bird1.png\"></div>
                <div><img id=\"monkeyfun\" src=\"data/monkeyfun2.png\"></div> -->
            </header>
            <nav>
                <ul>
                    <li><a href=\"../index.php\">Home</a></li>
                    <li><a href=\"#\">Director</a></li>
                    <li><a href=\"../readme.php\">Books</a></li>
                    ". login(). login2() ."
                    ". sign() . sign2() ."
                    <li><a href=\"../contact.php\">Contact</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <br>"; ?> <div>
                    <img style="width: 236px; height: 363px; float: left;" src="../data/image/827974d98ed5dabfbeecbdae890caebf.jpg">    <p style="background: #ddd;display: inline-block;padding: 10px; margin: 10px; " id="scrap">mmmmmmmmmmmmmmmmm</p>  <span style="background: #ddd;padding: 10px; margin: 10px; position: ">mido </span>       </div>
                    </div>
                </html>