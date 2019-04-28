<?php

@session_start();
include '../blog/koneksi.php';
require_once 'function/function.php';
if (@$_SESSION['admin']) {
$id = $_SESSION['admin'];
$profil = mysqli_query($koneksi, "select * from admin where id_admin=$id");

require_once 'header.php'; 
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$tampil_profil_edit = tampilkan_profil_edit($id);
// $posting = mysqli_query($koneksi, "select * from posting where id_file='$id'")or die(mysql_error());

if(isset($_POST['upload'])){
    $ekstensi_diperbolehkan	= array('png','jpg');
    $id            = $_POST['id'];
    $nama          = $_FILES['file']['name'];
    $x             = explode('.', $nama);
    $ekstensi      = strtolower(end($x));
    $ukuran	       = $_FILES['file']['size'];
    $file_tmp      = $_FILES['file']['tmp_name'];
    $nama_depan    = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $domisili      = $_POST['domisili'];
    $detail        = $_POST['detail'];
    $status        = $_POST['status'];	

  
    if (
        empty($nama) || empty(trim($nama_depan)) || empty(trim($nama_belakang)) || empty($tempat_lahir) ||
        empty($tanggal_lahir) || empty($domisili) || empty($detail) || empty($status)
        ) {
        $error = "Isi data yang lengkap";
    }else if(strtolower($kategori) == "pilihan"){
        $error = "Kategori masih kosong";
    } else {
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 104407000){			
            move_uploaded_file($file_tmp, 'file/'.$nama);
            $edit_profil = edit_profil($id, $nama, $nama_depan, $nama_belakang, $tempat_lahir, $tanggal_lahir, $domisili, $detail, $status);
            if($edit_profil){
                // header("location: posting.php");
                
                //  echo "<script>window.location.href='profil.php?id=".$id ."';</script>" ;
                $sukses = "Berhasil di update";
                       
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

<?php  while($d=mysqli_fetch_array($tampil_profil_edit)){ ?>

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
                <?php }else{ ?>
                    <div class="alert alert-success" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Well done:</span>
                        <?=$sukses?>
                    </div>
                <?php } ?>
                <form action="" class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?=$d['id']?>">
                                    <label class="col-md-12">Nama Depan</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nama_depan" class="form-control form-control-line" value="<?=$d['nama_depan']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama Belakang</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nama_belakang" class="form-control form-control-line" value="<?=$d['nama_belakang']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tempat Lahir</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tempat_lahir" class="form-control form-control-line" value="<?=$d['tempat_lahir']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Tanggal Lahir</label>
                                    <div class="col-md-12">
                                        <input type="text" name="tanggal_lahir" class="form-control form-control-line" value="<?=$d['tanggal_lahir']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Domisili</label>
                                    <div class="col-md-12">
                                        <input type="text" name="domisili" class="form-control form-control-line" value="<?=$d['domisili']?>">
                                    </div>
                                </div><div class="form-group">
                                    <label class="col-md-12">Hobi</label>
                                    <div class="col-md-12">
                                        <input type="text" name="hobi" class="form-control form-control-line" value="<?=$d['hobi']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Detail</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" id="ckeditor" class="ckeditor form-control form-control-line" name="detail"><?=$d['detail']?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Status</label>
                                    <div class="col-sm-2">
                                        <select name="status" class="form-control form-control-line">
                                            
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="file">
                                        <img src="file/<?=$d['foto']?>" class="img-responsive img-rounded" width="100px" height="100px">
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