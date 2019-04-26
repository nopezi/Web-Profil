<?php

@session_start();
include '../blog/koneksi.php';
if (@$_SESSION['admin']) {
$id = $_SESSION['admin'];
$profil = mysqli_query($koneksi, "select * from admin where id_admin=$id");

require_once 'header.php'; 

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
                
                <form action="aksi_tambah_posting.php" class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-md-12">Judul</label>
                                    <div class="col-md-12">
                                        <input type="text" name="judul" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Isi</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" id="ckeditor" class="ckeditor form-control form-control-line" name="isi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12">Kategori</label>
                                    <div class="col-sm-2">
                                        <select name="kategori" class="form-control form-control-line">
                                            <option>Pilihan</option>
                                            <option value="Artikel">Artikel</option>
                                            <option value="Project">Project</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-12"></label>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file" name="file">
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