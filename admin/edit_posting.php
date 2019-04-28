<?php

@session_start();
include '../blog/koneksi.php';
require_once 'function/function.php';
if (@$_SESSION['admin']) {
$id = $_SESSION['admin'];
$profil = mysqli_query($koneksi, "select * from admin where id_admin=$id");

require_once 'header.php'; 

$id_file = mysqli_real_escape_string($koneksi, $_GET['id_file']);
$tampil_posting = tampilkan_posting_edit($id_file);
// $posting = mysqli_query($koneksi, "select * from posting where id_file='$id'")or die(mysql_error());

if($_POST['upload']){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $id_file = $_POST['id_file'];
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];	

    if (empty($nama) || empty(trim($judul)) || empty(trim($isi)) || empty($kategori)) {
        $error = "Isi data yang lengkap";
    }else if(strtolower($kategori) == "pilihan"){
        $error = "Kategori masih kosong";
    } else {
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 104407000){			
            move_uploaded_file($file_tmp, 'file/'.$nama);
            $edit_posting = edit_posting($id_file, $nama, $judul, $isi, $kategori);
            if($edit_posting){
                // header("location: posting.php");
                echo "<script>window.location.href='posting.php';</script>";            
            }else{
                $error = "Gagal mengupload gambar";
            }
        }else{
            $error = "Ukuran file terlalu besar";
        }
    }else{
        $error = "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
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

<?php  while($d=mysqli_fetch_array($tampil_posting)){ ?>

    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Postingan</h4> 
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                <ol class="breadcrumb">
                    <li><a href="#">Postingan</a></li>
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
                                    <input type="hidden" name="id_file" value="<?=$d['id_file']?>">
                                    <label class="col-md-12">Judul</label>
                                    <div class="col-md-12">
                                        <input type="text" name="judul" class="form-control form-control-line" value="<?=$d['judul']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Isi</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" id="ckeditor" class="ckeditor form-control form-control-line" name="isi"><?=$d['isi']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Kategori</label>
                                    <div class="col-sm-2">
                                        <select name="kategori" class="form-control form-control-line">
                                            <option>Pilihan</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Project">Project</option>
                                            <option value="Profil">Profil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="file">
                                        <img src="file/<?=$d['nama_file']?>" class="img-responsive img-rounded" width="100px" height="100px">
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