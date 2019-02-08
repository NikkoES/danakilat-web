<?php 

if(isset($_GET['hapus'])) {
    $id=$_GET['hapus'];

    $hasil=mysql_query("DELETE FROM tb_fintech WHERE id='$id'");
    if($hasil){
        echo "<script>window.location = 'manage.php?page=fintech'</script>";
    }
}

?>

<div class="container">

    <h1 class="mt-4 mb-3">Manage Fintech</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">manage</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $page;?></li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <a class="btn btn-primary" href="manage.php?tambah=tambah-fintech"> Tambah Data </a>
                <br><br>
                <div class="table-responsive text-center">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>WN</th>
                                <th>Dokumen</th>
                                <th>Bank</th>
                                <th>Limit</th>
                                <th>Tenor</th>
                                <th>Bunga</th>
                                <th>Keterlambatan</th>
                                <th>Keterangan</th>
                                <th>Image</th>
                                <th width="20%">&nbsp;Action&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql=mysql_query("SELECT * FROM tb_fintech");
                            $no=1;
                            while($data=mysql_fetch_array($sql)){
                            ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data['nama_fintech']; ?></td>
                                <td><?php echo $data['umur_peminjam']; ?></td>
                                <td><?php echo $data['warga_negara']; ?></td>
                                <td><?php echo $data['dokumen']; ?></td>
                                <td><?php echo $data['bank']; ?></td>
                                <td><?php echo $data['limit_pinjaman']; ?></td>
                                <td><?php echo $data['tenor_pinjaman']; ?></td>
                                <td><?php echo $data['bunga']; ?></td>
                                <td><?php echo $data['max_keterlambatan']; ?></td>
                                <td><?php echo $data['keterangan']; ?></td>
                                <td><?php echo $data['image']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="manage.php?tambah=tambah-fintech&id=<?php echo $data['id'];?>">
                                        <i class="glyphicon glyphicon-pencil"></i>Ubah
                                    </a>
                                    <a class="btn btn-danger" href="manage.php?page=fintech&hapus=<?php echo $data['id'];?>">
                                        <i class="glyphicon glyphicon-remove"></i>Hapus
                                    </a>
                                </td>
                            </tr>
                            <?php 
                            $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>