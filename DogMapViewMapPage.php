<html>
<head>
<title>Nearby Dogs</title>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js" integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
 crossorigin=""></script>
 <script src="//widget.cloudinary.com/global/all.js" type="text/javascript"></script>
 <?php
    require 'Cloudinary.php';
    require 'Uploader.php';
    require 'Api.php';
    require 'settings.php';
?>
 <script = type="text/javascript">
var domelem = document.createElement('a');
domelem.href = "#";
domelem.innerHTML = "Click me";
 domelem = function openNav(){
  document.getElementById("mySidenav").style.width = "250px";
   }
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

 </script>
 

 <style>
 #main {
    transition: margin-left .5s;
    padding: 20px;
}
 .sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 10; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    z-index: 10;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
    z-index:10;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    z-index: 10;
}
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
    bottom: 0px;
    z-index: 1;
    }

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

 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img src="http://res.cloudinary.com/hdmzxikqp/image/upload/v1493410276/dog5_yd5mpn.jpg" style="margin:auto; width:200px;display:block" />
</div>
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
    var customOptions = {
        'maxWidth': '500',
        'className' : 'custom'
    }
  </script>

  <script> var marker = L.marker([40.006463, -105.265991]).addTo(mymap).on('click', openNav());


  </script>

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

    echo "<script type = 'text/javascript'> var marker = L.marker([$dblatitude, $dblongitude]).bindPopup(domelem).addTo(mymap)</script>";
}


?>
