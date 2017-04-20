<html>
<link href='//fonts.googleapis.com/css?family=Overlock SC' rel='stylesheet'>
<head>
<title>New User Sign Up</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>$(document).ready(function(){
 $('.button').click(function(){
 var clickBtnName = $(this).attr('name');
 var data = {'id': clickBtnName};
 $.post(ajaxurl, data, function(response) {
 window.location.href="https://hound-dogs.herokuapp.com/NewUserLogin.php";
});
});
});
</script>
<style>
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
    width: 50%;
    background-color: #53c687;
    color: white;
    padding: 14px 20px;
    margin: 20px 110px;
    border: none;
    border-radius: 4px;
    font-family: 'Overlock SC';
    font-size: 20px;
}
h1{
    padding: 40px;
    text-align: center;
    font-family: 'Overlock SC';
    font-size: 50px;
    color: green;
}
div {
    width: 50%;
    margin: auto;
    border-radius: 5px;
    background-color: none;
    font-family: 'Overlock SC';
    color: #006622;
}
body {
	background-image: url("https://www.ecotourismgc.com/wp-content/uploads/2015/09/background.jpg");
}
</style>
</head>
<body>
 <h1>Welcome New User!</h1>
 
 <div>
  <form style = "text-align: center" enctype="multipart/form-data" action = "http://localhost/InsertUsers.php" method = "post">
    <label>Username</label>
    <input type="text" name="username" placeholder="Username" size="30">

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" size="30">
  	
    <label>Repeat Password</label>
    <input type="password" name="reppassword" placeholder="Password" size="30">
    
    <input type="submit" value="Submit">
  </form>
</div>
 </body>
 </html>
