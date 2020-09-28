<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
// $id = $_GET['id'];
$obj = $dataajax;
$titles="";
$ids="";
$kat="";
$web="";
$hp="";
$alamat="";
$kota="";
$prov="";
$lat="";
$long="";
foreach($obj as $item){
  $titles.=$item->nama_krpl;
  $ids.=$item->id;
  $kat.=$item->kategori;
  $web.=$item->website;
  $hp.=$item->no_hp;
  $alamat.=$item->alamat;
  $kota.=$item->kota;
  $prov.=$item->provinsi;
  $lat.=$item->latitude;
  $long.=$item->longitude;
}

$title = "Detail dan Lokasi : ".$titles;
 ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'<?php print $this->config->item('base_img') ?>close.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
	
<div class="container">
	<div class="row">	
		<div class="col-lg-12">
			<div class="text">
				<h2 class="section-title">Tabel Detail Lokasi</h2>
			</div>
		</div>
      <div class="col-lg-5">
          <div class="panel panel-info">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
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
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Perusahaan</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Kota</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h4><?php echo $prov ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No HP</td>
                 <td><h4><?php echo $hp ?></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4><a href="http://<?php echo $web ?>"><?php echo $web ?></a></h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>
			</div>

    
	
		
	</div>
</div>