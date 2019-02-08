<?php

if(isset($_POST['tambah_fintech'])) {
    $nama_fintech=$_POST['nama_fintech'];
    $umur_peminjam=$_POST['umur_peminjam'];
    $warga_negara=$_POST['warga_negara'];
    $dokumen=$_POST['dokumen'];
    $bank=$_POST['bank'];
    $limit_pinjaman=$_POST['limit_pinjaman'];
    $tenor_pinjaman=$_POST['tenor_pinjaman'];
    $bunga=$_POST['bunga'];
    $max_keterlambatan=$_POST['max_keterlambatan'];
    $keterangan=$_POST['keterangan'];
    $image = rand(1000,100000)."-".$_FILES['image']['name'];
    $image_loc = $_FILES['image']['tmp_name'];
    $folder="../images/fintech/";
    move_uploaded_file($image_loc,$folder.$image);

    $hasil=mysql_query("INSERT INTO tb_fintech SET nama_fintech='$nama_fintech', umur_peminjam='$umur_peminjam', warga_negara='$warga_negara', dokumen='$dokumen', bank='$bank', limit_pinjaman='$limit_pinjaman', tenor_pinjaman='$tenor_pinjaman', bunga='$bunga', max_keterlambatan='$max_keterlambatan', keterangan='$keterangan', image='$image'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=fintech'</script>";
    }
}

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $hasil=mysql_query("SELECT * FROM tb_fintech WHERE id='$id'");
    $c=mysql_fetch_array($hasil);
    $nama_fintech=$c['nama_fintech'];
    $umur_peminjam=$c['umur_peminjam'];
    $warga_negara=$c['warga_negara'];
    $dokumen=$c['dokumen'];
    $bank=$c['bank'];
    $limit_pinjaman=$c['limit_pinjaman'];
    $tenor_pinjaman=$c['tenor_pinjaman'];
    $bunga=$c['bunga'];
    $max_keterlambatan=$c['max_keterlambatan'];
    $keterangan=$c['keterangan'];
}

if(isset($_POST['edit_fintech'])) {
    $nama_fintech=$_POST['nama_fintech'];
    $umur_peminjam=$_POST['umur_peminjam'];
    $warga_negara=$_POST['warga_negara'];
    $dokumen=$_POST['dokumen'];
    $bank=$_POST['bank'];
    $limit_pinjaman=$_POST['limit_pinjaman'];
    $tenor_pinjaman=$_POST['tenor_pinjaman'];
    $bunga=$_POST['bunga'];
    $max_keterlambatan=$_POST['max_keterlambatan'];
    $keterangan=$_POST['keterangan'];
    $image = rand(1000,100000)."-".$_FILES['image']['name'];
    $image_loc = $_FILES['image']['tmp_name'];
    $folder="../images/fintech/";
    move_uploaded_file($image_loc,$folder.$image);

    $hasil=mysql_query("UPDATE tb_fintech SET nama_fintech='$nama_fintech', umur_peminjam='$umur_peminjam', warga_negara='$warga_negara', dokumen='$dokumen', bank='$bank', limit_pinjaman='$limit_pinjaman', tenor_pinjaman='$tenor_pinjaman', bunga='$bunga', max_keterlambatan='$max_keterlambatan', keterangan='$keterangan', image='$image' WHERE id='$id'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=fintech'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Data Fintech</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mb-4 mt-4">
        <h1 class="mt-4">Tambah Fintech</h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <hr/>
                <form id="contactForm" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Fintech : </label>
                            <input name="nama_fintech" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $nama_fintech;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Umur Peminjam : </label>
                            <input name="umur_peminjam" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $umur_peminjam;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Warga Negara : </label>
                            <input name="warga_negara" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $warga_negara;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Dokumen : </label>
                            <input name="dokumen" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $dokumen;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Bank : </label>
                            <input name="bank" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $bank;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Limit Pinjaman : </label>
                            <input name="limit_pinjaman" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $limit_pinjaman;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Tenor Pinjaman : </label>
                            <input name="tenor_pinjaman" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $tenor_pinjaman;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Bunga : </label>
                            <input name="bunga" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $bunga;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Max Keterlambatan : </label>
                            <input name="max_keterlambatan" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $max_keterlambatan;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Keterangan : </label>
                            <input name="keterangan" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $keterangan;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Image :</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <input name="image" type="file" id="foto">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="success"></div>
                    <?php if(isset($_GET['id'])){
                        echo "<button name=\"edit_fintech\" type=\"submit\" class=\"btn btn-primary\" id=\"edit\">Edit Fintech</button>";
                    }
                    else {
                        echo "<button name=\"tambah_fintech\" type=\"submit\" class=\"btn btn-primary\" id=\"tambah\">Tambah Fintech</button>";
                    } ?>
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>