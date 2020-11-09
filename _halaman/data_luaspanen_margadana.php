<?php
  $title="Data Kelurahan di Kecamatan Margadana"; 
?> <!-- Judul Halaman -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="pages">
  <div data-page="tables" class="page no-toolbar no-navbar">
    <div class="page-content">
    
	<div class="navbarpages">
		<div class="navbar_left">
    <div class="logo_text"><a href="<?=url('beranda')?>" class="external"> <span>Web</span>GIS</a></div>
		</div>			
						
	</div>
     
    <div id="pages_maincontent">
            
                <div class="buttons-row">
                    <a href="<?=url('data_luaspanen_margadana')?>" class="tab-link button active">Data Luas Panen</a>
                    <a href="<?=url('data_luassawah_margadana')?>" class="tab-link button">Data Luas Sawah</a>

                </div>

     
     <div class="page_single layout_fullwidth_padding">          
            <div class="table-responsive">
                <table class="table">
                <p> </p>
                <h5>Data Luas Panen Rata-rata Produksi Padi</h5>

                <?php
                        include "koneksi.php";
                        $query = mysqli_query($connection,"SELECT * FROM tb_produksipadi_margadana ORDER BY id_kelurahan");  
                        $no = 1;
                    ?>
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col-sm"><p class="text-justify">No</p></th>
                        <th scope="col-sm"><p class="text-justify">Kelurahan</p></th>
                        <th scope="col-sm"><p class="text-justify">Luas Panen</p></th>
                        <th scope="col-sm"><p class="text-justify">Produksi (ku/ha)</p></th>
                        <th scope="col-sm"><p class="text-justify">Produksi (ton)</p></th>
                        </tr>
                    </thead>
                
                <tbody>
                    
                
                <?php if(mysqli_num_rows($query)>0){ ?>
                                <?php
                                   
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                    
                <tr>
                    <td> <?php echo $no++; ?></td>
                    <td><?php echo $data["nama_kelurahan"];?></td>
                    <td><?php echo $data["luas_panen"];?></td>
                    <td><?php echo $data["rata_produksi_ha"];?></td>
                    <td><?php echo $data["rata_produksi_ton"];?></td>
                     
                  
                             
                </tr>

                    <?php  } ?>
                    <?php } ?>

                </tbody>
           
            </table>
            <a href="<?=url('data_kecamatan')?>" class="btn btn-primary external"> Kembali</a>
        </div>
        </div>



        </div>
    </div>
</div>

