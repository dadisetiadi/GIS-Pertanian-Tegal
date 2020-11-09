

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php
  $title="Edit Data"; 
  
  $url='edit_datakc_sawah';
  $url2='edit_ls_tegalselatan';

  ?>



  <div data-page="about" class="page no-toolbar no-navbar">
    <div class="page-content">
    
    <div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('halaman_admin')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
					
        
          <div id="pages_maincontent">
      
          
	        <div class="page_single layout_fullwidth_padding">	
          <br> </br>  
		
    <?php
        if(isset($_POST['simpan'])){
        include 'koneksi.php';
        $id_kelurahan=  $_POST['id_kelurahan'];
        $nama_kelurahan = $_POST['nama_kelurahan'];
        $luas_panen = $_POST['luas_panen'];
        $rata_produksi_ha = $_POST['rata_produksi_ha'];
        $rata_produksi_ton = $_POST['rata_produksi_ton'];
        $lahan_sawah = $_POST['lahan_sawah'];
        $lahan_bukan_sawah = $_POST['lahan_bukan_sawah'];
        $jumlah = $_POST['jumlah'];
        mysqli_query($connection,"UPDATE tb_produksi_tegalselatan set nama_kelurahan='$nama_kelurahan', luas_panen='$luas_panen',rata_produksi_ha='$rata_produksi_ha',rata_produksi_ton='$rata_produksi_ton', lahan_sawah='$lahan_sawah', lahan_bukan_sawah='$lahan_bukan_sawah', jumlah='$jumlah' where id_kelurahan='$id_kelurahan'");
    ?>
  
  <script type="text/javascript">
    window.alert("Sukses Diubah");
    window.location.href="<?=url('edit_datasawah_tegalselatan')?>";
  </script>

  <?php

}

if(isset($_GET['hapus'])){
      include 'koneksi.php';
      $id_kelurahan = $_GET['id'];
      mysqli_query($connection,"DELETE from tb_produksi_tegalselatan where id_kelurahan='$id_kelurahan'");
}
if(isset($_GET['ubah']) AND isset($_GET['id'])) {
  $id=$_GET['id'];
  include "koneksi.php";
  $data = mysqli_query($connection,"SELECT * from tb_produksi_tegalselatan where id_kelurahan='$id'");
  while($b = mysqli_fetch_array($data)){
    $id_kelurahan=  $b['id_kelurahan'];
    $nama_kelurahan = $b['nama_kelurahan'];
    $luas_panen = $b['luas_panen'];
    $rata_produksi_ha = $b['rata_produksi_ha'];
    $rata_produksi_ton = $b['rata_produksi_ton'];
    $lahan_sawah = $b['lahan_sawah'];
    $lahan_bukan_sawah = $b['lahan_bukan_sawah'];
    $jumlah = $b['jumlah'];
  }


?> <!-- Judul Halaman -->


  <div class="container">
    <form method="post" enctype="multipart/form-data">
      <?=input_hidden('id_kelurahan',$id_kelurahan)?>
    
      <div class="form-group">
        <label>Nama Kelurahan</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('nama_kelurahan', $nama_kelurahan)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Luas Panen</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('luas_panen', $luas_panen)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Rata Produksi (ha)</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('rata_produksi_ha', $rata_produksi_ha)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Rata Produksi (ton)</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_text('rata_produksi_ton', $rata_produksi_ton)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_sawah',  $lahan_sawah)?>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label>Lahan Bukan Sawah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('lahan_bukan_sawah', $lahan_bukan_sawah)?>
          </div>
        </div>
      </div>

        <div class="form-group">
        <label>Jumlah</label>
        <div class="row">
          <div class="col-md-6">
            <?=input_number('jumlah',  $jumlah)?>
          </div>
        </div>
      </div>

      
      <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-info" href="<?=url($url)?>"><i class="fa fa-save"></i> Simpan</button>
        <a href="<?=url('edit_datasawah_tegalselatan')?>" class="btn btn-danger external"> Kembali</a>
      </div>

    </form>


 <?php } else {?>

    <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
     
                       <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_produksi_tegalselatan ORDER BY id_kelurahan");
                        ?>
                    <thead>
                    <tr>
                      <th>Nama Kelurahan</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    
                                    <td><?php echo str_replace('_', ' ',$data["nama_kelurahan"]); ?></td>
                                  
                                    <td>
                                       
                                      <a href="<?=url($url.'&ubah&id='.$data['id_kelurahan'])?>" class="external"><img src="<?=templates()?>images/icons/black/edit1.png"> Edit</a>

                                      <a href="<?=url($url.'&hapus&id='.$data['id_kelurahan'])?>" class="external" onclick="return confirm('Hapus data?')"> <img src="<?=templates()?>images/icons/black/edit1.png"></a> </a>
                                    </td>
                                </tr>
                                <?php  } ?>
                                <?php } ?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
      


 <?php } ?>
        <!-- footer ends-->

    </div>