<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include '../framework.php'; ?>
        
        <style>
            body,html{background-position:left;}
            body{background-image:url('../img/ocean2.jpg'); background-size:cover; min-height:95%;}
            @font-face{font-family:"judul"; src:url('../font/NantonBold.otf');}
            @font-face{font-family:"judul2"; src:url('../font/OCR.ttf');}
            span#judul{font-family:"judul"; text-shadow:3px 3px 3px black; color:#fff; font-size:40pt;}
            div.tengah{background-color: #31b0d5; padding:15px; height:228px; width:250px; margin:auto; box-shadow:2px 2px 30px 2px black;}
            input.input{padding:7px; width:240px;}
            input.input:hover{background-color:#3f51b5; color:white;}
            label.textinput{font-family:"judul"; font-size:15pt;}
            button#btnlogin{padding:9px; font-weight:bold; background-color:#fff; border-color:#3f51b5; border-radius:10%; box-shadow:1px 3px 7px 0px black; cursor:pointer;}
            button#btnlogin:hover{background-color:#6df15f; border-color:#fff;}
            a.back{background-color: #75f269; padding:6px; text-align:center; text-decoration:none; font-family:"judul2";}
            a.back:hover{background-color:#43efc0;}
            footer.footer{ font-family:"judul"; font-size:14pt; text-align:center; color:#fff; text-shadow:2px 2px 2px black;}
        </style>
    </head>
    
    <body> <br><br>
        
    <center><span id="judul">Login Admin</span></center>
    <?php for($a=0; $a<5; $a++) echo "<br>"; ?>
    
        <div class="tengah">
            <br>
                <form action="proseslogin-admin.php" method="post">
                    <label class="textinput">Username : </label>
                    <input type="text" class="input" name="username"> <br><br>
                    
                    <label class="textinput">Password : </label>
                    <input type="password" class="input" name="password"> <br><br>
                    
                    <button name="submit" type="submit" id="btnlogin" >Login</button> <br>
                </form>
            <center><a class="back" href="../hakakses.php">Kembali ke Hak Akses</a></center>
        </div> <br>
        
        <br><br>
   
    <footer class="footer">&COPY; <?php echo date('Y') ?> ubay delonge</footer>
    
    </body>
</html>
