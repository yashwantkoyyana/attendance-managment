<html>
<head>
<title> LOGIN-PAGE</title>
<script>
function validate(){
	
	var uname= document.getElementById('uname');
	var pass = document.getElementById('pass');
	
	if (name.value ==''){
		
		alert('please enter your name');
		return false;
	}
	if (pass.value ==''){
		
		alert('please enter password');
		return false;
		
	
	}
} 

</script>

<body>
<h1 class ="error"><?php echo $error; ?></h1><h1 class ="success"><?php echo $success; ?></h1>

<div class ="LOGIN" method="get" onsubmit ="">
<form>
<p>Username</p>
<input type="text" name="uname" value ="" placeholder="username"/>
<p>Password</p>
<input type="password" name="pass" value="" placeholder="password"/>
<form action="" >
<br><br><br><input type="submit" name="submit" value="Login" />
</form>
<p1><a href="#">forgot password?</a></p1>
</form>

</div>
<style>
body{
margin:0;
padding:0;
background-color:grey;
background-position:center;
background-image:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url(img6.jpg);
background-size:auto;
}
.LOGIN{
padding:50px 30px;
top:50%;
left:50%;
width:320px;
height:290px;
background-color:white;
box-sizing:border-box;
position:absolute;
transform:translate(-50%,-50%);
opacity:0.6;
}
.LOGIN p{
margin:0;
padding:0;
font-weight:bold;

}
.LOGIN input[type="text"],input[type="password"]
{

border:none;
border-bottom:1px solid black;
background:transparent;
outline:none;
height:40px;


}
.LOGIN input[type="submit"]{
width:150px;
height:30px;
background-color:grey;
margin:0;
text-align:center;
padding-left:14px;
}
.LOGIN p1{

}
{

background-color:red;
}
</style>
</body>
</head>




</html>