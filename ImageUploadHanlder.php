<?php
require 'Cloudinary.php';
require 'Uploader.php';
require 'Api.php';

\Cloudinary::config(array(
  "cloud_name" => "hdmzxikqp",
  "api_key" => "434736211772835",
  "api_secret" => "H-D-lwQ_CUeIKQjGCiv_1CFnP-g"
  ));
?>

<?php 
echo cl_image_tag("sample.jpg");
?>

