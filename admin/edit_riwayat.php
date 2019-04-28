<?php

@session_start();
include '../blog/koneksi.php';
require_once 'function/function.php';
if (@$_SESSION['admin']) {
$id = $_SESSION['admin'];
$profil = mysqli_query($koneksi, "select * from admin where id_admin=$id");

require_once 'header.php'; 
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$tampil_riwayat = tampilkan_riwayat_edit($id);
// $posting = mysqli_query($koneksi, "select * from posting where id_file='$id'")or die(mysql_error());

if($_POST['upload']){
    
    $id    = $_POST['id'];
    $tahun      = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];
    $lokasi     = $_POST['lokasi'];	
    $kategori   = $_POST['kategori'];

    if (empty($tahun) || empty(trim($keterangan)) || empty(trim($lokasi)) || empty($kategori)) {
        $error = "Isi data yang lengkap";
    }else {
        $edit_riwayat = edit_riwayat($id, $tahun, $keterangan, $lokasi, $kategori);
        if($edit_riwayat){
            header("location: riwayat.php");            
        }else{
            $error = "Ada Masalah edit data";
        }
    }
}

?>

        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
<?php require_once 'menu.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
<div id="page-wrapper">

<?php  while($d=mysqli_fetch_array($tampil_riwayat)){ ?>

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <a href="riwayat.php" class="btn btn-info"><i class="glyphicon glyphicon-step-backward"></i></a>
                
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                <ol class="breadcrumb">
                    <h4 class="page-title">Edit Riwayat</h4> 
                    <!-- <li><a href="#">Edit Riwayat</a></li> -->
                </ol>
            </div>
                    <!-- /.col-lg-12 -->
        </div>
                
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
            
                <?php if(!empty($error)){ ?>   
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Error:</span>
                        <?=$error?>
                    </div>
                <?php } ?>

                <form action="" class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?=$d['id']?>">
                                    <label class="col-md-12">Tahun</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tahun" class="form-control form-control-line" value="<?=$d['tahun']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Lokasi</label>
                                    <div class="col-md-12">
                                        <input type="text" name="lokasi" class="form-control form-control-line" value="<?=$d['lokasi']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Keterangan</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" id="ckeditor" class="ckeditor form-control form-control-line" name="keterangan"><?=$d['keterangan']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Kategori</label>
                                    <div class="col-sm-2">
                                        <select name="kategori" class="form-control form-control-line">
                                            <option>Pilihan</option>
                                            <option value="pendidikan">Pendidikan</option>
                                            <option value="organisasi">Organisasi</option>
                                            <option value="pekerjaan">Pekerjaan</option>
                                            <option value="prestasi">Prestasi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <a href="posting.php" class="btn btn-warning"><i class="glyphicon glyphicon-left"></i> Kembali</a>
                                        <input type="submit" class="btn btn-info" name="upload" value="Simpan">
                                    </div>
                                </div>
                            </form>

            </div>
        </div>
    </div>
                
    </div>
<?php } ?>
</div>
            <!-- /.container-fluid -->
<?php require_once 'footer.php' ?>
        
<?php }else { header("location:index.php"); } ?>