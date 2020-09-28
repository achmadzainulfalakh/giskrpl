<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">	
		<div class="col-md-12">
			<div class="text">
				<h2 class="section-title">Tabel Data Lokasi<a class="btn btn-success btn-lg pull-right" href="<?php print base_url()."lokasi/add-lokasi.html"?>">Add Lokasi</a></h2>
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
					print "data tidak ada.";
				} else {
					foreach($dataajax as $item){
					?>
					<tr>
						<td><?php print $item->nama_krpl; ?></td>
						<td><?php print $item->kategori; ?></td>
						<td><?php print $item->kota; ?></td>
						<td><?php print $item->website; ?></td>
						<td class="ctr">
						  <div class="btn-group">
							<a href="<?php print base_url().'lokasi/update-lokasi/'.$item->id; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
							<i class="fa fa-map-marker"> </i> Update Lokasi</a>&nbsp;
						  </div>
						  <div class="btn-group">
							<a href="<?php print base_url().'lokasi/delete-lokasi/'.$item->id; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-danger">
							<i class="fa fa-map-marker"> </i> Delete Lokasi</a>&nbsp;
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