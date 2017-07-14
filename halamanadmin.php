
<?php
   // untuk session agar tidak dapat mengakses ke index. langsung diarahkan ke hakakses.php
   session_start();
   if($_SESSION['username']==FALSE)
   {
       $submit = $_POST['submit'];
       $level  = $_POST['pilihan'];
       if($submit==FALSE and $level==FALSE)
       { session_destroy();
        header('Location:hakakses.php'); }
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title></title>
        <?php   
        include 'framework.php';
        ?>
        <style>
        hr{border-color:grey;}
            body,html{background-position:center; height:100%;}
            body{background-image:url('img/aa.jpg'); background-size:cover; background-repeat:repeat-y; min-height:100%;}
            @font-face{font-family:"judul"; src:url('font/NantonBold.otf');}
            h1#judul{font-family:"judul"; color:#fff; text-shadow:2px 2px 2px black;}
            .navbar-inverse{background-color:#4b7990; border:unset;}
            #notice{background-color:mediumaquamarine; padding:20px; border-left:10px solid tomato;}
            img.image{width:150px; height:150px; padding:20px;}
            div#animasi{position:relative; 
                        animation-name: animasi;
                        animation-duration: 3s;
                        animation-timing-function: ease-in;
                        animation-delay: 0s;
                        animation-iteration-count: infinite;
                        animation-direction: alternate;
                        
                       }
            @keyframes animasi
            {
                0% {left:0px; top:0px; transform:rotate(-5deg);}
                100% {left:0px; top:0px; transform:rotate(5deg);}
            }
        </style>
    </head>
    <body>
      <!-- Header -->
       <div class="navbar  navbar-fixed-top navbar-inverse w3-padding-8 w3-card-4 "  style="font-size:9pt;"> 
            <div class="container">
            <div class="navbar-header" >
                    <!-- Button Menu saat responsive -->
                    <button type="button" class="navbar-toggle w3-teal w3-hover-green"  data-toggle="collapse" data-target="#mynavbar">
                                <span class="fa fa-list fa-lg"></span>
                    </button>
                <div class="container-fluid ">
                    <img src="img/uwais.png" width="150" height="50">
                </div>
                
            </div>
                    <!-- COLLAPSE MENU -->
                        <div class="collapse navbar-collapse w3-center " id="mynavbar">
                            <ul class="nav navbar-left navbar-nav"> 
                                <li><a href="admin/blog_admin.php"  class="w3-text-white w3-hover-text-red "> Blog</a></li>        
                                <li><a href="admin/spp_admin.php" class="w3-text-white w3-hover-text-red "> SPP</a></li>
                                <li><a href="admin/nilai_admin.php" class="w3-text-white w3-hover-text-red"> Nilai</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                               <a class="btn btn-danger w3-text-white dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-user-circle-o fa-lg"></span> 
                                        <?php echo $_SESSION['username']; ?>
                                    <span class="fa fa-caret-down"></span>
                               </a>
                                <ul class="dropdown-menu w3-center" role="menu">
                                    <li><a class="w3-hover-text-red" href="logout.php">Logout</a></li>
                                </ul>
                              </li>
                            </ul>
                        </div>
            </div>
        </div>
      <br><br><br><br><br>
    
    <center>
        <div id="">
            <span class="w3-tag w3-red w3-padding-4 w3-card-4 w3-animated-skew"><h3>Selamat Datang Admin</h3></span>
        </div>
        </center>
    <br><br>
    
    <!-- Quotes -->
    <div class="container">
        
        <div id="notice" class="w3-card-8">
            <div class="w3-row-padding">
                <center>
                    <div class="w3-third">
                        <img src="img/bill-gates-2.jpg" class="img-circle  w3-hover-opacity image">
                    </div>
                    <div class="w3-half">
                         Success is a lousy teacher. It seduces smart people into thinking they can't lose.
                        Your most unhappy customers are your greatest source of learning.
                        It's fine to celebrate success but it is more important to heed the lessons of failure..<hr>
                        <i>Bill Gates</i> 
                    </div>
                </center>
            </div>
        </div> 
        
        <br> <br>
        
        <div id="notice" class="w3-card-8">
            <div class="w3-row-padding">    
                <center>
                    <div class="w3-third">
                        <img src="img/stev.jpg" class="img-circle  w3-hover-opacity image">
                    </div>
                    <div  class="w3-half">
                        Technology is nothing. 
                            What's important is that you have a faith in people, 
                            that they're basically good and smart, and if you give them tools, 
                            they'll do wonderful things with them. <hr>
                            <i>Steve Jobs</i> 
                    </div>
                </center>
            </div> 
        </div> 
        
        <br> <br>
        
        <div id="notice" class="w3-card-8">
            <div class="w3-row-padding">    
                <center>
                    <div class="w3-third">
                        <img src="img/BrinPage460.jpg" class="img-circle  w3-hover-opacity image">
                    </div>
                    <div  class="w3-half">
                        I would like to see anyone be able to achieve their dreams, 
                        and that's what this organization does<hr>
                        <i>Sergrey Brin & larry Page</i> 
                    </div>
                </center>
            </div> 
        </div> 
        
        <br> <br>
        
        <div id="notice" class="w3-card-8">
            <div class="w3-row-padding">    
                <center>
                    <div class="w3-third">
                        <img src="img/zuckerberg.jpg" class="img-circle  w3-hover-opacity image">
                    </div>
                    <div  class="w3-half">
                        People don't care about what you say, they care about what you build<hr>
                            <i>Mark Zuckeberg</i> 
                    </div>
                </center>
            </div> 
        </div> 
        
        <br>
    </div> 
    
    <br>
    </body>
</html>
