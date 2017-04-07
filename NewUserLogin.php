<html>
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
h1{
	padding: 70px 0;
	text-align: center;
}
form {
	
	width:100%;
	height: 200px;
}
table{
	margin:0 auto;
	z-index: 1;
	width:0%;
	height:50px;
}
</style>
</head>
<body>
 <h1>Welcome New User!</h1>
 
 <form style = "text-align: center" enctype="multipart/form-data" action = "http://localhost/InsertUsers.php" method = "post">
 <table width = "200" border = "0">
 <tr>
 	<td> Enter a username:
 	</td>
 	<td><input type = "text" name = "username" size = "30">
 	</td>
 </tr>
 <tr>
 	<td> Enter a password:
 	</td>
 	<td><input type = "text" name = "password" size = "30"> 
 	</td>
 </tr>
 <tr>
 	<td> Repeat password:
 	</td>
 	<td><input type = "text" name = "reppassword" size = "30"> 
 	</td>
 </tr>
 <tr>
 	<td><input type ="submit" value = "Enter">
 	</td>
 </tr>
 </table>
 </form>
 </body>
 </html>