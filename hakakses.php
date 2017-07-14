<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include './framework.php'; ?>
        
        <style>
            body,html{background-position:center;}
            body{background-image:url('img/bokeh2.jpg'); background-size:cover; min-height:99%;}
            @font-face{font-family:"judul"; src:url('font/NantonBold.otf');}
            div.atas{margin:auto;}
            h1#judul{font-family:"judul"; color:#fff; text-shadow:2px 2px 2px black; font-size:40pt;}
            select.select{width:250px;}
        </style>
    </head>
          
    <body>
        <br><br><br>
    <center>
        <div class="container">
            <h1 id="judul">PILIH AKSES ANDA</h1> <?php  for($i=0; $i<7; $i++) { echo"<br>";} ?>
            
            <form action="proses-hakakses.php" method="post" enctype="multipart/form-data">
                <select class="w3-select w3-card-8 w3-large w3-light-grey select" name="pilihan">
                    <option value="" disabled selected>-- PILIHAN --</option>
                    <option value="admin">ADMIN</option>
                    <option value="siswa">SISWA</option>
                </select> <br><br>
                <button class="btn btn-danger" name="submit"><span class="fa fa-send"></span> Kirim</button>
            </form>
        </div>
    </center>
    </body>
</html>

