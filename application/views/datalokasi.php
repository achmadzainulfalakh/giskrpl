<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">	
		<div class="col-md-12">
			<div class="text">
				<h2 class="section-title">Tabel Data Lokasi</h2>
			</div>
		</div>
		<!-- Tabel Data Lokasi -->
		<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-admin">
			  <thead>
				<tr>
				  <th>Nama Perusahaan</th>
				  <th>Kategori</th>
				  <th>Kota</th>
				  <th>Website</th>
				  <th>Aksi</th>
				</tr>
			  </thead>
			  <tbody>
			  <?php
				if(!$dataajax){
					echo "data tidak ada.";
				} else {
					foreach($dataajax as $item){
					?>
					<tr>
						<td><?php echo $item->nama_krpl; ?></td>
						<td><?php echo $item->kategori; ?></td>
						<td><?php echo $item->kota; ?></td>
						<td><?php echo $item->website; ?></td>
						<td class="ctr">
						  <div class="btn-group">
							<a target="_blank" href="<?php echo base_url().'home/detail-lokasi/'.$item->id; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
							<i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
						  </div>
						</td>
					  </tr>
					<?php
					}
				}
			  ?>
			  </tbody>
			</table>
		</div>
			
		</div>
	</div>
</div>