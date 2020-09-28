<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<?php $attributes = array('class' => '', 'id' => ''); ?>
		<?=form_open(base_url()."lokasi/update-lokasi.html",$attributes) ?>
			<?php
			if(!$dataajax){
				print "data tidak ada.";
			} else {
				foreach($dataajax as $item){
			?>
			<div class="col-lg-12">
				<div class="text">
					<h2 class="section-title">Update Lokasi<button class="btn btn-primary btn-lg pull-right" type="submit" name="submit" value="update">Update</button></h2>
					<input name="id" type="hidden" value="<?php print $item->id; ?>">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="panel panel-info">
					<div class="panel-heading centered">
						<h2 class="panel-title"><strong> - Lokasi - </strong></h4>
					</div>
					<div class="panel-body">
						<table class="table">
							<tr>
								<td>Longitude</td>
								<td><input name="longitute" type="text" class="form-control" placeholder="Longitude" value="<?php print $item->longitude; ?>"></td>
							</tr>
							<tr>
								<td>Latitude</td>
								<td><input name="latitude" type="text" class="form-control" placeholder="Latitude" value="<?php print $item->latitude; ?>"></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="panel panel-info">
					<div class="panel-heading centered">
						<h2 class="panel-title"><strong> - Detail - </strong></h4>
					</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<td>Nama KRPL</td>
							<td><input name="namakrpl" type="text" class="form-control" placeholder="Nama Perusahaan" value="<?php print $item->nama_krpl; ?>"></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><input name="kategori" type="text" class="form-control" placeholder="Kategori" value="<?php print $item->kategori; ?>"></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td><input name="kota" type="text" class="form-control" placeholder="Kota" value="<?php print $item->kota; ?>"></td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td><input name="provinsi" type="text" class="form-control" placeholder="Provinsi" value="<?php print $item->provinsi; ?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input name="alamat" type="text" class="form-control" placeholder="Alamat lengkap" value="<?php print $item->alamat; ?>"></td>
						</tr>
						<tr>
							<td>No HP</td>
							<td><input name="nohp" type="text" class="form-control" placeholder="Nomor HP" value="<?php print $item->no_hp; ?>"></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><input name="alamatweb" type="text" class="form-control" placeholder="Alamat web" value="<?php print $item->website; ?>"></td>
						</tr>
					</table>
				</div>
				</div>
			</div>
			<?php
					}
				}
			  ?>
		</form>
	</div>
</div>