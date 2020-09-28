<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="row">
		<?php $attributes = array('class' => '', 'id' => ''); ?>
		<?=form_open(base_url()."lokasi/add-lokasi.html",$attributes) ?>
			<div class="col-lg-12">
				<div class="text">
					<h2 class="section-title">Add Lokasi<button class="btn btn-primary btn-lg pull-right" type="submit" name="submit" value="add">Save</button></h2>
					
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
								<td><input name="longitute" type="text" class="form-control" placeholder="Longitude" value=""></td>
							</tr>
							<tr>
								<td>Latitude</td>
								<td><input name="latitude" type="text" class="form-control" placeholder="Latitude" value=""></td>
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
							<td><input name="namakrpl" type="text" class="form-control" placeholder="Nama Perusahaan" value=""></td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><input name="kategori" type="text" class="form-control" placeholder="Kategori" value=""></td>
						</tr>
						<tr>
							<td>Kota</td>
							<td><input name="kota" type="text" class="form-control" placeholder="Kota" value=""></td>
						</tr>
						<tr>
							<td>Provinsi</td>
							<td><input name="provinsi" type="text" class="form-control" placeholder="Provinsi" value=""></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td><input name="alamat" type="text" class="form-control" placeholder="Alamat lengkap" value=""></td>
						</tr>
						<tr>
							<td>No HP</td>
							<td><input name="nohp" type="text" class="form-control" placeholder="Nomor HP" value=""></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><input name="alamatweb" type="text" class="form-control" placeholder="Alamat web" value=""></td>
						</tr>
					</table>
				</div>
				</div>
			</div>
		</form>
	</div>		
</div>