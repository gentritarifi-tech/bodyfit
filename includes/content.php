 <!---NAVBAR-->
 <nav id="menulist">
        <ul>
        <li><a href="../index.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">HOMEPAGE</a></li>
            <li><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">STYLE DEMO</a></li>
            <li><a href="#" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">FULL WIDTH</a></li>
            <li><a href="#"style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">DROPDOWN</a></li>
            <li><a href="admin/index.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">LOG IN</a></li>
            <li><a href="include/posts.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">POSTS</a></li>
            <li><a href="include/about.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">ABOUT US</a></li>
            <li><a href="include/contact.php" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 13px;">CONTACT</a></li>
        </ul>
    </nav>

    <div id="content"></div>

    <br>
    <br>

    <!------SLIDER-------->

    

   
   

    <div class="slider-container">
    <style>
        .mySlides {display:none;}
        </style>
        </head>
        
 
        
        <div class="slider style="max-width:500px">
            
            <div class="text-block">
                <h1>Indonectetus facilis</h1>
                <p>Etiam mollis sapien et risus laoreet <br>
                mollis. Maecenas varius mollis <br>
                lacus, facilisis dapibus <br>
                nislbibendum sit amet. Quisque <br>
                molesite adipiscing nulla sit amet <br>
                Nam ante neque, vehicula nec .</p>
                <a href="#" style="text-decoration: none" style="color: #3a799d; font-size: 13px;">Read More >></a>
                </div>
          <img class="mySlides" src="img/accesories1.jpg" style="width: 960px;" >
          <img class="mySlides" src="img/accesories2.jpg" style="width:960px">
          <img class="mySlides" src="img/accessories3.jpg" style="width:960px">
         
         
        </div>
        
        <script>
        var myIndex = 0;
        carousel();
        
        function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 3000); //
        }
        </script>
        </div>



        


    <!---FIRST 4 BOXES-->

    <div class="boxes">
    <div class="box">
        <img src="img/corp225x180.jpg" id="img1" width="225px" height="180px"> 
        <p style="font-size: 16px;">Title Goes Here</p>
        <p style="color: #979797; font-size: 13px;">Vestassapede et donec ut est liberos <br>sus et eget. Quisqueta <br>habitur augue magnisl magna <br>phasellus saggittior ant curbiturpis.</p>
        <a href="#" style="text-decoration: none" style="color: #3a799d;"> Read More >></a>
    </div>
    <div class="box">
        <img src="img/corp225x180.jpg" id="img1" width="225px" height="180px"> 
        <p style="font-size: 16px;">Title Goes Here</p>
        <p style="color: #979797; font-size: 13px;">Vestassapede et donec ut est liberos <br>sus et eget. Quisqueta <br>habitur augue magnisl magna <br>phasellus saggittior ant curbiturpis.</p>
        <a href="#" style="text-decoration: none" style="color: #3a799d;">Read More >></a>
    </div>
    <div class="box">
        <img src="img/corp225x180.jpg" id="img1" width="225px" height="180px"> 
        <p style="font-size: 16px;">Title Goes Here</p>
        <p style="color: #979797; font-size: 13px;">Vestassapede et donec ut est liberos <br>sus et eget. Quisqueta <br>habitur augue magnisl magna <br>phasellus saggittior ant curbiturpis.</p>
        <a href="#" style="text-decoration: none" style="color: #3a799d;">Read More >></a>
    </div>
    <div class="box">
        <img src="img/corp225x180.jpg" id="img1" width="225px" height="180px"> 
        <p style="font-size: 16px;">Title Goes Here</p>
        <p style="color: #979797; font-size: 13px;">Vestassapede et donec ut est liberos <br>sus et eget. Quisqueta <br>habitur augue magnisl magna <br>phasellus saggittior ant curbiturpis.</p>
        <a href="#" style="text-decoration: none" style="color: #3a799d;">Read More >></a>
    </div>
    </div>
    <hr style="width:100%;text-align:left;margin-left:0">
</div>


<!---OTHER BOXES 2-->

    <div class="boxes 2">
        <div class="text">
            <p style="font-size: 16px;">Latest News & Events</p>
            <p style="color: #3a799d; font-size: 13px;">Title Goes Here </p>
     <p style="color: #979797; font-size: 13px;"> Monday 21st Janary <br>
Vestassapede et donec ut est liberos sus et eget <br>
sed eget. Quisqueta habitur augue magnisil <br>
magna phasellus sagittitor ant curabiturpis.</p>
<hr style="width:100%;text-align:left;margin-left:0">
<p style="color: #3a799d; font-size: 13px;">Title Goes Here </p>
     <p style="color: #979797; font-size: 13px;"> Monday 21st Janary <br>
Vestassapede et donec ut est liberos sus et eget <br>
sed eget. Quisqueta habitur augue magnisil <br>
magna phasellus sagittitor ant curabiturpis.</p>
<hr style="width:100%;text-align:left;margin-left:0">
<p style="color: #3a799d;" font-size: 13px;>Title Goes Here </p>
     <p style="color: #979797; font-size: 13px;" > Monday 21st Janary <br>
Vestassapede et donec ut est liberos sus et eget <br>
sed eget. Quisqueta habitur augue magnisil <br>
magna phasellus sagittitor ant curabiturpis.</p>
        </div>

        <div class="text">
            <p style="font-size: 16px;">Take The Virtual Tour</p>
            <iframe width="300" height="234"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
            <p style="color: #979797; font-size: 13px;">Aliquatpede id pellus elit quis in nec <br>
            consectetuer mattis duis in. Ipseumet ris morbi <br>
            quis ac nulla aenean trisuscelerit nonummy <br>
            augue et. Elisicursus aenean sit consequam wisi <br>
            ames felit phasellenterdum sagittis sit mauris.</p>
            <a href="#" style="text-decoration: none" style="color: #3a799d;">Read More >></a>
        </div>

        <div class="main-content"> 
            <div class="block2">
            <p style="font-size: 16px;">Meet The Instructors</p>
            <p><img src="img/img80x80.jpg" alt="Headshot photo" >
                <p style="color: #979797; font-size: 13px;"><b>Name Goes Here</b></p>
            <p style="color: #979797; font-size: 13px;">Sport Type Here</p>
             <a href="#" style="text-decoration: none" style="color: #3a799d;" font-size: 13px;>Read More >></a>
        </div>
        <hr style="width:33%;text-align:left;margin-left:0">
        <div class="block2">
            <p><img src="img/img80x80.jpg" alt="Headshot photo" >
                <p style="color: #979797; font-size: 13px;"><b>Name Goes Here</b></p>
            <p style="color: #979797; font-size: 13px;">Sport Type Here</p>
             <a href="#" style="text-decoration: none" style="color: #3a799d;" font-size: 13px;>Read More >></a>
        </div>
        <hr style="width:33%;text-align:left;margin-left:0">
        <div class="block2">
            <p><img src="img/img80x80.jpg" alt="Headshot photo" >
                <p style="color: #979797; font-size: 13px;"><b>Name Goes Here</b></p>
            <p style="color: #979797; font-size: 13px;">Sport Type Here</p>
             <a href="#" style="text-decoration: none" style="color: #3a799d;" font-size: 13px;>Read More >></a>
        </div>
       
        


    </div>
