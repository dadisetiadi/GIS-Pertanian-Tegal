<?php 
 include '_loader.php'; 
 if(isset($_GET['halaman'])){
    $halaman=$_GET['halaman'];
  }
  else{
    $halaman='beranda';
  }
  ob_start();
  $file='_halaman/'.$halaman.'.php';
  if(!file_exists($file)){
    include '_halaman/error.php';
  }
  else{
    include $file;
  }
  $content = ob_get_contents();
  ob_end_clean();
  
?>

<!DOCTYPE html>
<html lang=""> <!-- /.Pnegaturan warna tema -->

<?php include '_layouts/head.php'?> <!-- /.mengakses file head.php -->

<body>
    
<?php
  include '_layouts/sidebar.php'; 


  ?>

  <?php
  echo $content;
  ?>
   <!-- /.content -->

  <?php


  include '_layouts/js.php';


?> 

</div>
</body>
</html>
 