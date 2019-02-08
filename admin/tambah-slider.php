<?php

if(isset($_POST['tambah_slider'])) {
    $image_slider = rand(1000,100000)."-".$_FILES['image_slider']['name'];
    $image_loc = $_FILES['image_slider']['tmp_name'];
    $folder="../images/slider/";
    move_uploaded_file($image_loc,$folder.$image_slider);

    $deskripsi=$_POST['deskripsi'];

    $hasil=mysql_query("INSERT INTO tb_slider SET image='$image_slider', deskripsi='$deskripsi'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=slider'</script>";
    }
}

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $hasil=mysql_query("SELECT * FROM tb_slider WHERE id='$id'");
    $c=mysql_fetch_array($hasil);
    $image_slider=$c['image'];
    $deskripsi=$c['deskripsi'];
}

if(isset($_POST['edit_slider'])) {
    $image_slider = rand(1000,100000)."-".$_FILES['image_slider']['name'];
    $image_loc = $_FILES['image_slider']['tmp_name'];
    $folder="../images/slider/";
    move_uploaded_file($image_loc,$folder.$image_slider);

    $deskripsi=$_POST['deskripsi'];

    $hasil=mysql_query("UPDATE tb_slider SET image='$image_slider', deskripsi='$deskripsi' WHERE id='$id'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=slider'</script>";
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

    <title>Tambah Data Slider</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mb-4 mt-4">
        <h1 class="mt-4">Tambah Slider</h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <hr/>
                <form id="contactForm" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nama Deskripsi : </label>
                            <input name="deskripsi" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $deskripsi;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Image Slider :</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default btn-file">
                                        <input name="image_slider" type="file" id="foto">
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="success"></div>
                    <?php if(isset($_GET['id'])){
                        echo "<button name=\"edit_slider\" type=\"submit\" class=\"btn btn-primary\" id=\"edit\">Edit Slider</button>";
                    }
                    else {
                        echo "<button name=\"tambah_slider\" type=\"submit\" class=\"btn btn-primary\" id=\"tambah\">Tambah Slider</button>";
                    } ?>
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>