<?php

?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <script src="../bootstrap/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="../framework/w3.css">
        <link rel="stylesheet" href="../framework/css/font-awesome.css">
        <style>
            body,html{background-position:top; height:100%;}
            body{background-image:url("../img/aaa.jpg"); background-size:cover; min-height:100%;}
            @font-face{font-family:"judul"; src:url("../font/a.ttf");}
            div#judulatas{font-family:"judul"; color:#a94200; font-size:40pt; text-shadow:3px 3px 3px white;}
            @media screen and (min-width:900px) and (max-width:1366px)
            {
                a.kembali{transform:rotate(-14deg);}
            }
            @media screen and (min-width:400px) and (max-width:900px)
            {
                div#judulatas{font-size:30pt;}
                body{background-position:top;}
                a.kembali{transform:translate(100px);}
            }
            @media screen and (min-width:0px) and (max-width:400px)
            {
                div#judulatas{font-size:30pt;}
                body{background-position:top;}
                a.kembali{transform:translate(130px);}
                a.kembali{padding-left:20px;}
            }
            
           div#backgroundinput{width:370px;}
           textarea{height:150px;}
        </style>
    </head>
    <body>
      <!-- Header 
       <div class="navbar  navbar-fixed-top navbar-inverse w3-padding-8 w3-card-4 "  style="font-size:9pt;"> 
            <div class="container-fluid">
            <div class="navbar-header" >
                    <button type="button" class="navbar-toggle w3-teal w3-hover-green"  data-toggle="collapse" data-target="#mynavbar">
                                <span class="fa fa-list fa-lg"></span>
                    </button>
                <div class="container-fluid ">
                    <img src="img/uwais.png" width="150" height="50">
                </div>
                
            </div>
                    <!-- COLLAPSE MENU 
                        <div class="collapse  navbar-collapse w3-center " id="mynavbar">
                            <ul class="nav navbar-left navbar-nav"> 
                                <li><a href="gallery.php" class="w3-text-white w3-hover-text-red "> Blog</a></li>        
                                <li><a href="downloaddesign.php" class="w3-text-white w3-hover-text-red "> SPP</a></li>
                                <li><a href="nilai.php" class="w3-text-white w3-hover-text-red"> Nilai</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                               <a class="btn btn-danger w3-text-white dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-user-circle-o fa-lg"></span> 
                                        selamat datang, <?php # echo $_SESSION['username']; ?>
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
          <br><br><br>
          -->
          
          <br>
    <center><div id="judulatas"> Tuangkan Imajinasimu</div></center><br>
          <div class="w3-container">
            <a class="w3-btn w3-teal w3-round w3-large kembali" href="../halamanadmin.php">Kembali</a>
          </div>
    <br>
    
    <center>
        <div id="backgroundinput" class="container">
            <form action="" method="post">
                <input class="w3-input w3-border w3-white w3-border-black" name="judulberita" type="text" placeholder="Masukan Judul Cerita"><br>
                
                <label style="color:#000;">Masukan gambar</label>
                <input class="w3-input w3-border w3-white  w3-border-black" name="gambarberita"  type="file" accept="image/*"><br>
                
                <textarea name="isiberita" placeholder="Masukan isi berita" class="w3-input w3-white  w3-border w3-border-black"></textarea> <br>
                
                <button type="submit" name="submit" class="w3-btn w3-black w3-hover-red">Kirim</button>
                <button type="reset" class="w3-btn w3-black w3-hover-red">Reset</button> <br> <br>
                
                &copy; <?php echo date('Y'); ?> ubay dillah
            </form>
          
        </div>
    </center>
    
    
    </body>
    
</html>
