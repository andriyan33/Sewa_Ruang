<?php 
    session_start();

     include 'MySQL.php';

        $id = $_GET['id'];

    $mysql = new MySQL();
    $mysql->connect();
    $mysql->execute("SELECT * FROM peminjaman where id_peminjaman = $id");

    if($mysql->get_num_rows() != null){
        $row = $mysql->get_array();

        $ruangan = $row['ruangan'];
        $jurusan = $row['jurusan'];
        $waktu = $row['tanggal_peminjaman'];
        $jml_pst = $row['jumlah'];
        $alasan = $row['alasan'];
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Peminjaman Ruangan</title>
            
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
            
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-image: url('images/Baground.jpg'); background-position: center;">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12" style="color: white;">
                    <div class="col-lg-1 col-md-1 col-xs-1 text-left">
                        <br>
                        <a class="btn btn-default" href="riwayat_peminjaman.php" role="button">Back</a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3 text-left">
                        <h2><?php echo $_SESSION['nama_user']; ?></h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4">
                        <h2>Form Edit Ruangan</h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 text-right">
                        <br>
                        <a class="btn btn-default" href="session_destroy.php" role="button">Logout</a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <form action="validasi_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8 " style="color: white">
                        <label><h4>Ruangan : </h4></label>
                        <br>
                        
                        <label class="radio-inline">
                            <input type="radio" name="ruang" id="ruang1" value="ruangan 1" <?php echo ($ruangan=="ruangan 1" ? "checked": "") ?> > Ruangan 1
                        </label>
                       <label class="radio-inline">
                            <input type="radio" name="ruang"  value="ruangan 2" <?php echo ($ruangan=="ruangan 2" ? "checked": "") ?>> Ruangan 2
                        </label>
                        <br>
                        <label class="radio-inline">
                            <input type="radio" name="ruang" id="ruang3" value="ruangan 3" <?php echo ($ruangan=="ruangan 3" ? "checked": "") ?>> Ruangan 3
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="ruang" id="ruang4" value="ruangan 4" <?php echo ($ruangan=="ruangan 4" ? "checked": "") ?>> Ruangan 4
                        </label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8" style="color: white;">
                        <label><h4>Jurusan : </h4></label>
                        <br>
                        <label class="radio-inline">
                            <input type="radio" name="jurusan" id="jurusan1" value="Teknik Informatika"
                            <?php echo ($jurusan=="Teknik Informatika" ? "checked": "") ?>
                            > Teknik Informatika
                        </label>
                        <br>
                        <label class="radio-inline" >
                            <input type="radio" name="jurusan" id="jurusan2" value="Sistem Informasi"<?php echo ($jurusan=="Sistem Informasi" ? "checked": "") ?>
                            >  Sistem Informasi
                        </label>
                        <br>
                        <label class="radio-inline ">
                            <input type="radio" name="jurusan" id="jurusan3" value="Teknik Sipil" <?php echo ($jurusan=="Teknik Sipil" ? "checked": "") ?>
                            >  Teknik Sipil
                        </label>
                        <br>
                        <label class="radio-inline">
                            <input type="radio" name="jurusan" id="jurusan4" value="Teknik Lingkungan"<?php echo ($jurusan=="Teknik Lingkungan" ? "checked": "") ?>
                            >  Teknik Lingkungan
                        </label>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                        
                    <div class="col-lg-12 col-md-12 col-xs-12"><br></div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo $waktu ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                        
                    <div class="col-lg-12 col-md-12 col-xs-12"><br></div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8">
                        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $jml_pst ?>">
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                        
                    <div class="col-lg-12 col-md-12 col-xs-12"><br></div>
                </div>
                    
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8">
                        <textarea class="form-control" id="alasan" name="alasan" rows="3" > <?php echo $alasan ?> </textarea>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                        
                    <div class="col-lg-12 col-md-12 col-xs-12"><br></div>
                </div>  
                    
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-xs-8 text-right">
                        <button type="submit"  value="Simpan" name="Simpan" class="btn btn-primary btn-lg btn-block">Simpan</button>    
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-2"></div>
                </div>
            </form>
                
                
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       
        <script src="js/bootstrap.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>