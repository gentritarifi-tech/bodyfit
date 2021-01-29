<!DOCTYPE html>
<html>
    <head>
        <title>BodyFit</title>
        <link rel="stylesheet" type="text/css" href="../css/contactstyle.css">
    </head>
   <body></body>
        <header>
            <div class="container">
                <a href="../index.php"><img src="../img/logo-0.jpg"></a>
            </div>
            

                <form action="#" id="sbar">
                    <input type="text" placeholder="Search Our Website..." name="search" >
                    <button type="Search" style="background: #3b7a9d; color: white; height: 36px; width: 68px;">Search</button>
                  </form>
                  
</header>



    <nav id="menulist">
        <ul>
        <li><a href="../index.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">HOMEPAGE</a></li>
            <li><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">STYLE DEMO</a></li>
            <li><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">FULL WIDTH</a></li>
            <li><a href="#"style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">DROPDOWN</a></li>
            <li><a href="../admin/index.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">LOG IN</a></li>
            <li><a href="posts.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">POSTS</a></li>
            <li><a href="about.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">ABOUT US</a></li>
            <li><a href="contact.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">CONTACT</a></li>
        </ul>
    </nav>
  

<div id="form">
    <form name="myForm" onsubmit="returnvalidateForm()">
        <label for="emri">Name:</label>
        <input type="text" id="emri" name="emri" placeholder="Sheno Emrin...">

        <label for="mbiemri">Lastname:</label>
        <input type="text" id="mbiemri" name="mbiemri" placeholder="Sheno Mbiemrin...">
    
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Email...">
        <p id="email_paragraf" style="color: blue;"></p>

        <label for="tel">Tel:</label>
        <input type="text" id="tel" name="tel" placeholder="Tel...">

        <label for="gjinia">Gjinia:</label><br><br>
        <input type="radio" name="gjinia" value="Mashkull">Mashkull<br>
        <input type="radio" name="gjinia" value="Femer">Femer<br>
        <br>
        <label for="dituri"> Njohurite rreth aplikacioneve kompjuterike:</label><br>
        <input type="checkbox" name="category[]" value="MS Office">MS Office<br/>
        <input type="checkbox" name="category[]" value="Photoshop">Photoshop<br/>
        <input type="checkbox" name="category[]" value="Video Editing">Video Editing<br/>
        <input type="checkbox" name="category[]" value="Rrjeta">Rrjeta<br/>

        <br>
        <label for="profesioni">Profesioni:</label>
        <select id="profesioni">
            <option value = "0">Select</option>
            <option value="1">Student</option>
            <option value="2">Teacher</option>
            <option value="3">Doctor</option>
            <option value="4">I papune</option>
        </select>

        <label for="pershkrimi">Pershkrimi:</label>
        <textarea placeholder="Pershkrimi..." id="pershkrimi"></textarea>

        <input type="submit" value="Send">
        </form>
</div>


<!---FOOTER-->

<footer>
    <div id="copyright">
        <p>Copyright 2013 Domain Name - All Rights Reserved</p>
    </div>
    <div id="themename">
        <p>Template by OS Templates</p>
    </div>
</footer>
</body>
</html>