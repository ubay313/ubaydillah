<?php
   // untuk session agar tidak dapat mengakses ke index. langsung diarahkan ke hakakses.php
   session_start();
   if($_SESSION['email']==FALSE)
   {
       $submit = $_POST['submit'];
       $level  = $_POST['pilihan'];
       if($submit==FALSE AND $level==FALSE)
       { session_destroy();
         header('Location:hakakses.php'); }
   }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta charset="UTF-8">
        <title></title>
        <?php
            include './framework.php';
        ?>
        <style>
            
            @font-face{font-family:"judul"; src:url('font/a.ttf');}
            
            .logo{font-size:150px; color:black;}
            .bg-grey{background-color: #d4d4d4; padding:20px;}
            .vismis{font-family:"judul"; color:#000; font-size:85pt; text-shadow:2px 2px red;}
            #judul1{color:#000;}

            @media screen and (min-width:900px) and (max-width:1366px)
            {
              hr#all{width:1000px; border:1px solid grey;}
              .ketiga{text-align:right;}
            }
            @media screen and (min-width:450px) and (max-width: 900px) 
            {    .col-sm-4 
                 { text-align: center;
                   margin: 25px 0;
                 }
                 hr#all{width:500px;}
            }
            @media screen and (min-width:0px) and (max-width:450px)
            {
                .col-sm-4 
                 { text-align: center;
                   margin: 25px 0;
                 }
                .logo{font-size:110px;}
                #judul1{font-size:13pt;}
                hr#all{width:300px;}
                .bawah{text-align: center;}
                
            }
            
            .bulat{background-color:#999999; border-radius:100%; width:20px; height:20px; display:inline-block;}
            .bulat:hover{background-color:#777777;}
            
            .shadow{box-shadow:1px 2px 5px black;}
            
            
            .atas{color: #fff;}
            hr#foterhr{border:1px solid gray;}

            .list{list-style:none;}
        </style>
    </head>
       
    <body> 
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
                    <!-- COLLAPSE MENU -->
                        <div class="collapse  navbar-collapse w3-center " id="mynavbar">
                            <ul class="nav navbar-left navbar-nav">
                                <li><a href="index.php" class="w3-text-white w3-hover-text-red "> Beranda</a></li>
                                <li><a href="gallery.php" class="w3-text-white w3-hover-text-red "> Blog</a></li>        
                                <li><a href="downloaddesign.php" class="w3-text-white w3-hover-text-red "> SPP</a></li>
                                <li><a href="nilai.php" class="w3-text-white w3-hover-text-red"> Nilai</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                              <li>
                               <a class="btn btn-danger w3-text-white dropdown-toggle" data-toggle="dropdown">
                                    <span class="fa fa-user-circle-o fa-lg"></span> 
                                        selamat datang, <?php echo $_SESSION['email']; ?>
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
          
                <!--Slide-Show -->
                <span>
                  <img class="nature" src="img/1.png" width="100%">
                  <img class="nature" src="img/2.png" width="100%">
                  <img class="nature" src="img/3.png" width="100%">
                  <img class="nature" src="img/4.png" width="100%">
                </span>
                  <script>
                    w3.slideshow(".nature");
                  </script>
                  <br>
    <center><img src="img/decor.png" width="200" height="50"></center>
                  <!-- VISI misi -->
  <div class="container-fluid ">           
    <div class="row">
            <div class="col-sm-4 col-lg-3 col-md-3">
                <span class="vismis">Visi</span>
            </div>
        <div class="col-sm-8 col-lg-9 col-md-9">
            <h4 id="judul1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </h4>
        </div>  
        
     </div>
  </div>   <br>
  
  
                  <!-- VISI misi -->
  <div class="container-fluid bg-grey ">           
    <div class="row"> 
        <div class="col-sm-8 col-lg-9 col-md-9">
            <h4 id="judul1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </h4>
        </div>  
       <div class="col-sm-4 col-lg-3 col-md-3">
                <span class="vismis">Misi</span>
            </div>
     </div>
  </div>
                  <br>
      <center><img src="img/decor.png" width="200" height="50"></center>
      <br>
      
      <!-- Pendaftaran -->
      <div class="container">
          <div class="row">
              
              <div class="col-lg-4 col-md-4 col-sm-4 list  w3-center">
                  <div class="shadow">
                  <div class="w3-red w3-padding-4 "><h4>Pendaftaran</h4></div>
                  <div class="w3-light-grey w3-padding-8">
                      Gelombang 1<br>
                      <li>Dibuka tanggal : 16 juni - 16 juli <?php echo date('Y'); ?></li>
                      <li>Biaya pendaftaran : Rp.1.200.000</li>
                  </div>
                  <div class="w3-red w3-padding-4"><h5>SMA UWAIS ALQARNI</h5></div>
                  </div>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-4 list  w3-center">
                  <div class="shadow">
                      <div class="w3-red w3-padding-4"><h4>Pendaftaran</h4></div>
                      <div class="w3-light-grey w3-padding-8">
                          Gelombang 2<br>
                          <li>Dibuka tanggal : 18 juli - 2 agustus <?php echo date('Y'); ?></li>
                          <li>Biaya pendaftaran : Rp.1.300.000</li>
                      </div>
                      <div class="w3-red w3-padding-4"><h5>SMA UWAIS ALQARNI</h5></div>
                  </div>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-4 list  w3-center">
                  <div class="shadow">
                      <div class="w3-red w3-padding-4"><h4>Pendaftaran</h4></div>
                      <div class="w3-light-grey w3-padding-8">
                          Gelombang 3<br>
                          <li>Dibuka tanggal : 4 agustus - 4 septmbr <?php echo date('Y'); ?></li>
                          <li>Biaya pendaftaran : Rp.1.300.000</li>
                      </div>
                      <div class="w3-red w3-padding-4"><h5>SMA UWAIS ALQARNI</h5></div>
                  </div>
              </div>
              
          </div>
      </div> <center><hr id="all"></center>

      <!-- Pemberitahuan -->
      <br><br>
      
      <!-- Footer -->
      <div class="container-fluid w3-black w3-text-grey w3-card-24">
          <div class="row  bawah">
              <div class="col-lg-4 ">
                  <h3 class="atas">Tentang kami</h3>
                  <p>SMA UWAIS ALQARNI merupakan SMA <br>yang mendidik para siswa & siswinya agar memperdalam 
                  pengetahuannya tentang Alquran & Hadits.</p>
                 
              </div>
              <div class="col-lg-4 w3-center">
                  <h3 class="atas">Kontak</h3>
                  <p>untuk informasi lebih lanjut <br>dapat hubungi nomer dibawah ini:</p>
                  <p><span class="fa fa-phone"></span> 021-3344589</p>
                  <p><span class="fa fa-envelope"></span> smauwais07@gmail.com</p>
              </div>
              <div class="col-lg-4 ketiga">
                  <h3 class="atas">Visi & Misi</h3>
                  <p>Mencerdaskan siswa dengan <br> metode Alquran dan Assunnah</p>
                  
              </div>
          </div> <hr id="foterhr">
          
                <center>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                
                <span class="w3-text-dark-grey">copyright &copy; <?php echo date('Y'); ?> SMA UWAIS ALQARNI</span></center><br>
      </div>

    </body>
</html>
