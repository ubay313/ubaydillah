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
            
            @keyframes bganiamsi
            {
                 0%{background-color:#FFDAB9;}
                22%{background-color:#EEE8AA;}
                45%{background-color:#F0E68C;}
                66%{background-color:#D8BFD8;}
                80%{background-color:#DDA0DD;}
                100%{background-color:#EEE8AA;}
            }
            
            @-webkit-keyframes bganimasi
            {
                 0%{background-color:#FFDAB9;}
                22%{background-color:#EEE8AA;}
                45%{background-color:#F0E68C;}
                66%{background-color:#D8BFD8;}
                80%{background-color:#DDA0DD;}
                100%{background-color:#EEE8AA;}
            }
            
            body,html{min-height:100%;}
            body
            { 
               background-color:#cce6ff;
                animation-name:bganimasi; animation-delay:1s; 
                animation-direction:normal; 
                animation-timing-function:linear;
                -webkit-animation: bganimasi 7s normal infinite linear;
            }
            
            
            div.navbar-default{background-color:#4183f6; border:unset;}
            @font-face{font-family:"judul"; src:url('../font/Neon.ttf');}
            
            
            @media screen and (min-width:0px) and (max-width:400px)
            {   .bgatas{background-color: #065298;}
                #spp{font-family:"judul"; font-size:15pt; 
                     color:#fff; background-color:#fc4747; cursor:default;
                     box-shadow:1px 2px 10px #000;
                     text-shadow:2px 1px 1px black;
                 }
                .gradient{width:100%; padding:5px; height:5px;
                         background: red; background:-webkit-linear-gradient(left, yellow, red); }
                 
                 .bgbawah{ color:#000;}
            }
            
            @media screen and (min-width:400px) and (max-width:1366px)
            {   
                .bgatas{background-color: #065298;}
                #spp{font-family:"judul"; font-size:15pt; 
                     color:#fff; background-color:#fc4747; cursor:default;
                     box-shadow:1px 2px 10px #000;
                     text-shadow:2px 1px 1px black;
                 }
                .gradient{width:100%; padding:5px; height:5px;
                         background: red; background:-webkit-linear-gradient(bottom right, red, yellow); }
                
                .kelas , .siswa, .jml_spp , .kirim, .kembali{width:350px;}
                .byr_spp{width:350px;}
                .bgbawah{ color:#000;}
                .lineluar{border:3px solid green; width:400px; padding-left:10px; padding-right:10px;
                          padding-top:20px; padding-bottom:20px; border-radius:10px; 
                        box-shadow:2px 2px 20px;}
            }
        </style>
    </head>
        
    <body>
            <!--header-->
            <div class="bgatas">
                <div class="w3-center w3-padding-24 spp container-fluid">
                    <span class="btn" id="spp">Pembayaran SPP</span>
                </div>
            </div>
            <div class="gradient"></div>
          
            <br><br>
            
            <!-- FORM -->
            
                <div class="container">
                    <form method="POST" action="proses_sppadmin.php">
                        <center>
                            <div class="lineluar">
                            <select class="w3-select kelas w3-border-green w3-card-2">
                            <option value="" disabled selected class="bg-danger" >-- PILIH KELAS --</option>
                            <option value="" class="bg-info">06TPLM11</option>
                            <option value="" class="bg-info">06TPLM12</option>
                            <option value="" class="bg-info">06TPLM13</option>
                            </select>
                            
                            <br><br>
                            
                            <select class="w3-select siswa w3-border-green w3-card-2">
                            <option value="" disabled selected class="bg-danger" >-- PILIH SISWA --</option>
                            <option value="" class="bg-info">06TPLM11</option>
                            </select>
                            
                            <br><br>
                            
                            <input type="text" readonly class="w3-light-gray w3-input jml_spp 
                                   w3-border w3-border-green w3-card-2" placeholder="spp yang telah dibayar"> <br>
                            <input type="text" readonly class="w3-light-gray w3-input jml_spp 
                                   w3-border w3-border-green w3-card-2" placeholder="yang belum dibayar"> <br>
                            
                            <div class="input-group has-success w3-card-2 byr_spp">
                                <span class="input-group-addon"><i class="fa fa-money fa-2x"></i></span>
                                <input type="text" class="form-control input-lg w3-medium" 
                                       placeholder="SPP yang ingin dibayar" >
                            </div> <br>
                            
                            <button class="w3-btn w3-blue w3-hover-green btn-block kirim" type="submit">
                                <span class="glyphicon glyphicon-send"></span> Kirim</button>
                                <br><br>
                               
                            
                            <a href="../halamanadmin.php" class="w3-btn w3-blue btn-block  kembali w3-hover-green ">
                                <span class="glyphicon glyphicon-chevron-left"></span> Kembali ke Halaman Admin
                            </a>
                            
                            
                            
                            </div>
                        </center>
                    </form>
                </div>
            
            
            <br>
            <footer class="w3-center bgbawah navbar-fixed-bottom w3-padding-8">&copy; <?php echo date('Y'); ?> ubay dillah</footer>
    </body>
</html>