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
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                    <select class="form-control pull-right row b-none">
                        <option>March 2017</option>
                        <option>April 2017</option>
                        <option>May 2017</option>
                        <option>June 2017</option>
                        <option>July 2017</option>
                    </select>
                </div>
                <h3 class="box-title"><a href="tambah_posting.php" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i></a></h3>
                <div class="table-responsive">
                    <table id="example" class="table table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Isi</th>
                                <th>Kategori</th>
                                <th>Setting</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
include '../blog/koneksi.php'; 
$data = mysqli_query($koneksi, "select * from posting");
$no = 1;
$num_char = 100;
while($d = mysqli_fetch_array($data)){
?>
                             <tr>
                                <td><?=$no++?></td>
                                <td>
                                    <?=$d['judul'] ?>
                                </td>
                                <td>
                                    <img src="<?php echo "file/".$d['nama_file']; ?>" width="100"class="img-rounded img-responsive">
                                </td>
                                <td>
                                     <?=substr($d['isi'], 0, $num_char) . '...'; ?>
                                </td>
                                <td>
                                    <?=$d['kategori'] ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="edit_posting.php?id_file=<?=$d['id_file']?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a class="btn btn-danger" href="delete_posting.php?id_file=<?=$d['id_file']?>"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>       
                            </tr>
<?php } ?>
                        </tbody>
                    </table>
<script type="text/javascript">
    
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
                </div>
            </div>
        </div>
    </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                
</div>
            <!-- /.container-fluid -->
<?php require_once 'footer.php' ?>
        
<?php }else { header("location:index.php"); } ?>