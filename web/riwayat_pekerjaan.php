<?php 
require_once "core/init.php"; 
// require_once 'menu.php';

$num_char = 200;
$num_char2 = 400;
// $artikel = tampilkan();
$pekerjaan = tampilkan_pekerjaan();

?>

<div class="col-md-6 col-lg-6 col-table">
    <div class="col-content feature-block">
        
            <img src="theme/img/svg/code.svg" alt="img" class="img-fluid">
            <h4>work experience</h4>

            
        <div class="list-group">

<?php while($row = mysqli_fetch_assoc($pekerjaan)){  ?>

            <div class="panel panel-default">
                <a href="#pekerjaan<?=$row['id']?>" class="list-group-item" data-toggle="collapse">
                    <p class="list-group-item-text"><?=$row['keterangan']?></p>
                </a> 
            
                <div class="panel-collapse collapse" id="pekerjaan<?=$row['id']?>">
                    <div class="panel-body">
                        <p><?=$row['lokasi']?>, <?=$row['tahun']?></p>
                    </div>
                </div>
            </div>
<?php } ?>

                  
        </div>

    </div>
</div>