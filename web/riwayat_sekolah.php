<?php 
require_once "core/init.php"; 
// require_once 'menu.php';

$num_char = 200;
$num_char2 = 400;
// $artikel = tampilkan();
$pendidikan = tampilkan_pendidikan();

?>

<div class="col-md-6 col-lg-6 col-table">
    <div class="col-content feature-block">
        
            <img src="theme/img/svg/vector.svg" alt="img" class="img-fluid">
            <h4>Education</h4>

            
        <div class="list-group">

<?php while($row = mysqli_fetch_assoc($pendidikan)){  ?>

            <div class="panel panel-default">
                <a href="#pendidikan<?=$row['id']?>" class="list-group-item" data-toggle="collapse">
                    <p class="list-group-item-text"><?=$row['tahun']?></p>
                </a> 
            
                <div class="panel-collapse collapse" id="pendidikan<?=$row['id']?>">
                    <div class="panel-body">
                        <p><?=$row['keterangan']?>, <?=$row['lokasi']?></p>
                    </div>
                </div>
            </div>
<?php } ?>

                  
        </div>

    </div>
</div>