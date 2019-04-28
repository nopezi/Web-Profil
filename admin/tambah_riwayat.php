<?php

@session_start();
include '../blog/koneksi.php';
include 'function/function.php';
if (@$_SESSION['admin']) {
$id = $_SESSION['admin'];
$profil = mysqli_query($koneksi, "select * from admin where id_admin=$id");

require_once 'header.php'; 

if(isset($_POST['upload'])){
    $tahun      = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];
    $lokasi     = $_POST['lokasi'];
    $kategori   = $_POST['kategori'];

    if(!empty(trim($tahun)) && !empty(trim($keterangan)) && !empty(trim($kategori))){

        if(tambah_data_riwayat($tahun, $keterangan, $lokasi, $kategori)){
            // header("Location: riwayat.php");
            echo '<script> language="javascript">alert("Berhasil Tambah"); document.location="riwayat.php";</script>';
        }else{
            $error = "Nambah data nya bermasalah gaes";
        }

    }else{
        $error = "Data riwayat belum di isi dengan lengkap";
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
    <div class="container-fluid">
        <div class="row bg-title">
            
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                
                <!-- <h4 class="page-title">Riwayat Hidup</h4>  -->
                <a href="riwayat.php" class="btn btn-info"><i class="glyphicon glyphicon-step-backward"></i></a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                <ol class="breadcrumb">
                    <li><a href="#">Riwayat Hidup</a></li>
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
                     <label class="col-md-12">Tahun</label>
                     <div class="col-md-4">
                        <input type="text" name="tahun" class="form-control form-control-line">
                     </div>
                </div>
                <div class="form-group">
                     <label class="col-md-12">Lokasi</label>
                     <div class="col-md-8">
                         <input type="text" name="lokasi" class="form-control form-control-line">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Keterangan</label>
                        <div class="col-md-12">
                            <textarea rows="5" id="ckeditor" class="ckeditor form-control form-control-line" name="keterangan"></textarea>
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
                        <input type="submit" class="btn btn-info" name="upload" value="Simpan">
                    </div>
                </div>

                </form>

            </div>
        </div>
    </div>
                
    </div>
</div>
            <!-- /.container-fluid -->
<?php require_once 'footer.php' ?>
        
<?php }else { header("location:index.php"); } ?>