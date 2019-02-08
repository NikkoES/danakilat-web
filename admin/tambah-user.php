<?php

if(isset($_POST['tambah_user'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $hasil=mysql_query("INSERT INTO tb_user SET username='$username', password='$password', level='$password'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=user'</script>";
    }
}

if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $hasil=mysql_query("SELECT * FROM tb_user WHERE id='$id'");
    $c=mysql_fetch_array($hasil);
    $username=$c['username'];
    $password=$c['password'];
    $level=$c['level'];
}

if(isset($_POST['edit_user'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $level=$_POST['level'];

    $hasil=mysql_query("UPDATE tb_user SET username='$username', password='$password', level='$level' WHERE id='$id'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=user'</script>";
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

    <title>Tambah User</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mb-4 mt-4">
        <h1 class="mt-4">Tambah User</h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <hr/>
                <form id="contactForm" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Username : </label>
                            <input name="username" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $username;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Password : </label>
                            <input name="password" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $password;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Level : </label>
                            <input name="level" type="text" class="form-control" id="name" value="<?php
                            if(isset($_GET['id'])){
                                echo $level;
                            } ?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <?php if(isset($_GET['id'])){
                        echo "<button name=\"edit_user\" type=\"submit\" class=\"btn btn-primary\" id=\"edit\">Edit User</button>";
                    }
                    else {
                        echo "<button name=\"tambah_user\" type=\"submit\" class=\"btn btn-primary\" id=\"tambah\">Tambah User</button>";
                    } ?>
                    
                </form>
            </div>
        </div>
    </div>

</body>
</html>