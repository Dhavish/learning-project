<!DOCTYPE html>
<html>
<head>
	<title>Let's Learn It|A Place to Improve your Skills</title>
</head>
<style type="text/css">
	body{
		background: url("wall.jpg");
		background-repeat: no-repeat;
		background-size: cover;

	}
	.login{
		    width: 380px;
		    height: 500px;
		    background: rgba(0,100,250,0.3);
		    margin-left: 70%;
		    margin-top: -30%;
		    border-radius: 20px;
		    font-family: cursive;
		    color: white;
	}
	label{
		margin-top: 5%;
		margin-left: 35%;
		font-size: 40px;
		color: white;
	}
	input{
		margin-left: 5%;
		margin-top: 20%;
		background: rgba(0,100,250,0.3);
		color: white;
		height: 40px;
		border: none;
		outline: none;
	}
	
    .sb{
    	background-color: red; 
    	margin-left: 35%; 
    	margin-top: 15%; 
    	width: 120px; 
    	height: 40px; 
    	border-radius: 20px;
    	font-size: 20px;

    }
    .sb:hover{
    	background-color: green;
    }
    a{
    	margin-left: 3%;
    	color: white;
    	font-size: 20px;

    }
    .cir{
    	    width: 400px;
		    height: 400px;
		    background: rgba(0,100,250,0.3);
		    margin-left: 20%;
		    margin-top: 5%;
		    border-radius: 50%;
		    font-family: cursive;
		    color: white;
		    text-align: center;
		    box-shadow: 2px grey;

    }
    p{
    	  font-family: verdana;
    	  margin-left: 10%;
    	  margin-top: 5%;
    	  font-size: 100px;

    }
    hr{
    	border:1px solid;
    	border-radius: 10px;

    }
	
</style>
<body onload="ol()">
 <form name="m1" method="POST">
	<div class="cir">
	<p>Let's<br>Learn<br>It</p>
	</div>
	<div class="login">
		<label>Login</label><br>
		<hr id="li" width="20%">
		<label style="font-size: 30px; margin-left: 3%; margin-top: 30%;">Username</label><input  id="ip" type="text" name="t1" placeholder="Username" required="" onfocus="li()">
		<label style="font-size: 30px; margin-left: 3%; margin-top: 30%;">Password</label><input id="iq" type="password" name="t2" placeholder="Password"  style="margin-top: 15%; margin-left: 8%;" required=""><br>

		<input class="sb" type="submit" name="s1"  value="Login" onclick="pl()"><br>
		<a href="register.php">Register</a><br>
		<a href="forget.php" >Forget Password</a>

	</div>

<script type="text/javascript">
	function ol(){
		alert("Welcome to online learning platform");
	}
	function li(){
		 document.getElementById('li').width="120px";
	}

	function pl(){
        var x= document.getElementById('ip').value;
        var y= document.getElementById('iq').value;
        if (x=="" || y==""){
                     alert("*Fill Username* or *Password*") ;

        }
       
}
</script>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"learning");
if(isset($_POST['s1']))
{
	$name=$_POST['t1'];
	$password=$_POST['t2'];
	$s=mysqli_query($con,"SELECT * from reg where username='$name' and password='$password'");
	$i=mysqli_num_rows($s);
	if($i>0){
		   echo "login succesfull";
		   header('location:main.php');
		   
		}
     else{
     	    echo '<script>alert("invalid login")</script>';
     }
	 
}

?>