<!DOCTYPE html>
<html>
<head>
	<title>Let's Learn It|A Place to Improve your Skills</title>
	<style type="text/css">
		body{
			background: url("reg.jpg");
			background-size:cover;
			background-repeat: no-repeat;
		}
		.reg{
			   background-color: rgb(0,0,10,0.4);
			   border-radius: 20px;
			   width: 400px;
			   height: 500px;
			   margin-left: 50%;
			   margin-top: -40%;
		}
		label{
			   color: white;
			   margin-left: 35%;
			   margin-top: 10%;
			   font-family: cursive;
			   font-size: 30px;
		}
		input{
			background-color: rgb(0,0,10,0.4);
			color: white;

			border-color: white;
		}
		.sb{
			 margin-left: 35%; 
			 margin-top: 10%;
			 background-color: white;
			 width: 130px;
			 height: 40px;
			 border-radius: 20px;
			 color: black;
			 outline: none;
			 font-size: 22px;
			 font-family: cursive;

		}
		.sb:hover{
			        background-color: orange;
			        color: white;
		}
		a{
			color: white;
			margin-left: 3%;
			font-family: verdana;

		}
		 .cir{
    	    width: 400px;
		    height: 370px;
		    background: rgba(0,0,250,0.3);
		    margin-left: 10%;
		    margin-top: 1%;
		    border-radius: 50%;
		    font-family: cursive;
		    color: white;
		    text-align: center;
		    box-shadow: 2px grey;

             }
           .cir2{
           	      width: 100px;
		          height: 80px;
		          background: white;
		          margin-left: 10%;
		          margin-top: 3%;
		          border-radius: 50%;
		          font-family: cursive;
		          color: white;
		          text-align: center;
		          box-shadow:   3px 3px grey;
		          

           }
           .cir2 img{
           	           width: 80px;
           	           height: 100px;
           }
           .cir3{
           	      width: 100px;
		          height: 80px;
		          background: white;
		          margin-left: 20%;
		          margin-top: -6%;
		          border-radius: 50%;
		          font-family: cursive;
		          color: white;
		          text-align: center;
		          box-shadow:   3px 3px grey;
		          

           }
           .cir3 img{
           	           width: 60px;
           	           height: 60px;
           	           border-radius: 50%;
           }
           .cir4{
           	      width: 100px;
		          height: 80px;
		          background: white;
		          margin-left: 30%;
		          margin-top: -6%;
		          border-radius: 50%;
		          font-family: cursive;
		          color: white;
		          text-align: center;
		          box-shadow:   3px 3px grey;
		          

           }
           .cir4 img{
           	           width: 60px;
           	           height: 60px;
           	           margin-top: 6%;
           	           border-radius: 20%;

           	           
           	           
           }
           .cir5{
           	      width: 100px;
		          height: 80px;
		          background: white;
		          margin-left: 15%;
		          margin-top: 2%;
		          border-radius: 50%;
		          font-family: cursive;
		          color: white;
		          text-align: center;
		          box-shadow:   3px 3px grey;
		          

           }
           .cir5 img{
           	           width: 80px;
           	           height: 65px;
           	           margin-top: 6%;
           	           border-radius: 20%;

           	           
           	           
           }
           .cir6{
           	      width: 100px;
		          height: 80px;
		          background: white;
		          margin-left: 25%;
		          margin-top: -6%;
		          border-radius: 50%;
		          font-family: cursive;
		          color: white;
		          text-align: center;
		          box-shadow:   3px 3px grey;
		          

           }
           .cir6 img{
           	           width: 80px;
           	           height: 65px;
           	           margin-top: 6%;
           	           border-radius: 20%;

           	           
           	           
           }

          p{
    	  font-family: verdana;
    	  text-align: center;
    	  margin-left: 2%;
    	  margin-top: 10%;
    	  font-size: 100px;

           }
		
	</style>
</head>

<body>
  <form name="m1" method="POST">
    <div class="cir">
	<p >Let's<br>Learn<br>It</p>
	</div>
    
    <div class="cir2">
      <img src="python.png">
    </div>

    <div class="cir3">
    	<img src="java.png">
    </div>
    <div class="cir4">
    	<img src="html.png">
    </div>
    <div class="cir5" >
    	<img src="css.png">
    </div>
    <div class="cir6" >
    	<img src="css.png">
    </div>

	<div class="reg">
		<label>Register</label><br>
		<label style="margin-left: 5%; margin-top: 5%;">Name</label><input type="text" id="ip" name="t1" required="" style="margin-top: 10%; margin-left: 22%;"><br>
		<label style="margin-left: 5%; margin-top: 5%;">Password</label><input type="password" id="iq" name="t2" required="" style="margin-top: 10%; margin-left: 10%;"><br>
		<label style="margin-left: 5%; margin-top: 5%;">Email</label><input type="text"  name="t3" required=""  style="margin-top: 10%; margin-left: 24%;"><br>
		<label style="margin-left: 5%; margin-top: 5%;">Mobile</label><input type="text" name="t4" required="" style="margin-top: 10%; margin-left: 20%;"><br>
		<input type="submit" name="s1" class="sb"  ><br>
		<a href="login.php">Login</a>
	</div>

   
 </form>
</body>
</html>
<?php
    $con=mysqli_connect("localhost","root","");
    mysqli_select_db($con,"learning");
    if(isset($_POST['s1']))
    {
      $a1=$_POST['t1'];
      $a2=$_POST['t2'];
      $a3=$_POST['t3'];
      $a4=$_POST['t4'];
      $i = "INSERT into reg(username,password,email,mobile) values ('$a1','$a2','$a3','$a4')";
      mysqli_query($con,$i);
      header('location:login.php');
      
    }



?>

   