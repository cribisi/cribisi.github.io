<html>
<head>
<title>Nearby Dogs</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
 crossorigin=""></script>

 <style>
	form{
	width: 600px;
	height: 300px;
	margin: 0 auto 0 auto;
	padding: 10px 10px;	
	 }
  #mapid {
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;}
	 
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 100%;
    background-color: #53c687;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
}
 </style>
</head>
 <body>
 <div id="mapid"></div>  
  <script>
  var mymap = L.map('mapid').setView([40.006463, -105.265991], 15);
 L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibHVzdzYxMjYiLCJhIjoiY2oxbDdxc3BxMDAwcTMybDI2M28wM3VnaiJ9.2Oop3pz_TvNkmyOBvWWA7A', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
    /*var = greenIcon = L.icon({
    iconUrl: 'leaf-green.png',
    shadowUrl: 'leaf-shadow.png',

    iconSize:     [38, 95], // size of the icon
    shadowSize:   [50, 64], // size of the shadow
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    shadowAnchor: [4, 62],  // the same for the shadow
    popupAnchor:  [-3, -76] 
    });
    L.marker([40.00643, -105.265991],{icon: greenIcon}).addto(mymap);*/
    
    
  </script>
  
  <script> var marker = L.marker([40.006463, -105.265991]).addTo(mymap);</script>
     
     
 </body>
</html>
<?php
function pg_connection_string_from_database_url() {
    return "dbname=dff2a27c9i26ki host=ec2-23-23-227-188.compute-1.amazonaws.com port=5432 user=vdlgvifazdpdaj password=1c07055de63f0532e4e4015d9b6b062821708286d27396e7262a40910194394c sslmode=require"; # <- you may want to add sslmode=require there too
}

$pg_conn = pg_connect(pg_connection_string_from_database_url());
if (!pg_con) {
    echo "Database connection error.";
    exit;
}
$doginfo = pg_query($pg_conn,"SELECT * from doginformation;");
while($dbdoginfoarray = pg_fetch_array($doginfo)){
    $dblatitude =  $dbdoginfoarray['latitude'];
    $dblongitude = $dbdoginfoarray['longitude'];
    echo  "<script type = 'text/javascript'> var marker = L.marker([$dblatitude, $dblongitude]).addTo(mymap).bindPopup('<strong>$dblatitude</strong><br>Where the GISC was born.').openPopup();</script>";
}


?>