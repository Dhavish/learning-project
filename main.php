<!DOCTYPE html>
<html>
<head>
	<title>Let's Learn It|A Place to Improve your Skills</title>
	<style type="text/css">
		.navbar{
			     width: 100%;
			     height: 80px;
			     background-color: rgba(0,0,255,0.7);
			     text-align: center;

		}
		strong{
			     font-family: cursive;
			     color: white;
			     font-size: 40px;
			     margin-top: -3%;

		}
		b{
			color: yellow;
		}
		pre{
			font-size: 38px;
			margin-left: 25%;
			margin-top: -10%;
			color: white;
		}
		.py{
			margin-top: 3%;
			margin-left: 10%;
			width: 300px;
			height: 350px;
			border-radius: 20px;
			box-shadow: 2px 2px 2px 2px gray;
		}
		.more{
			margin-top: 3%;
			margin-left: 38%;
			background-color: green;
			width: 200px;
			height: 40px;
			border-radius: 20px;
			box-shadow: 2px 2px 2px 2px gray;
			text-align: center;
		}
		.more a{
			      font-size: 20px;
			      color: white;
			      font-family: cursive;
			      text-decoration: none;
		}
		.cir{
    	    width: 150px;
		    height: 150px;
		    background:white;
		    margin-left: 20%;
		    margin-top: 5%;
		    border-radius: 50%;
		    font-family: cursive;
		    color: white;
		    border:1px solid red;
		    text-align: center;
		    box-shadow: 2px grey;

             }
            .cir img{
            	      width: 130px;
            	      height: 150px;
            	      margin-top: 3%;
            }
            .btn{
            	  width: 200px;
            	  height: 50px;
            	  background-color: blue;
            	  border:none;
            	  margin-left: 12%;
            	  margin-top: 10%;
            	  border-radius: 10px;
            	  color: white;
            	  font-size: 20px;
            	  outline: none;
            }
            .footer{
			       width: 100%;
			       height: 65px;
			       background-color: rgb(0,0,10,0.5);
			       
			       margin-top: 8%;
		           }
		   .footer a{
			        color: white;
			        text-decoration: none;
			        font-family: times new roman;
			        font-size: 20px;
			        margin-left: 1%;
			        margin-top: 2%;
		             }
		   .social{
         	         margin-top: -1%;
                 }
            .social img{
         	           height: 40px;
         	           margin-left: 75%;
         	           margin-top: -10%;
                   
              } 
           text{
         	       margin-left: 50%;
         	       color: white;
         	       font-family: times new roman;
         	       font-size: 20px;
                }
		
	</style>
</head>
<body onload="ol()">
	<div class="navbar">
		<img src="books.png" style="margin-left: -70%; margin-top:1%; height: 50px;">
		<strong>Let's <b>l</b>earn <b>i</b>t</strong><img src="play.png" height="40px" style="border-radius: 50%; margin-top: 2%;">
		<p style="color: white; margin-top: -7%; font-size: 70px; margin-left: -39%; font-family: cursive">|</p>
		<pre>Improve your <strong>Skills</strong> in an <b>effective</b> way</pre>
	</div>
	<div class="py">
           <br>
		<div class="cir">
			<img src="python.png">
        </div>
        <button class="btn" onclick="py()">Start Learning</button>
	</div>
    <div class="py" style="margin-left: 38%; margin-top: -26%;">
           <br>
		<div class="cir">
			<img src="java.png" style="height: 90px; margin-top: 20%; border-radius: 10px;">
        </div>
        <button class="btn">Start Learning</button>
	</div>
	<div class="py" style="margin-left: 65%; margin-top: -26%;">
           <br>
		<div class="cir">
			<img src="html.png" style="height: 90px; margin-top: 20%; border-radius: 10px;">
        </div>
        <button class="btn">Start Learning</button>
	</div>
	<div class="py" style="margin-left: 22%;">
           <br>
		<div class="cir">
			<img src="css.png" style="border-radius: 50%; margin: 1%;  width: 120px; height: 120px; margin-top: 8%;">
        </div>
        <button class="btn">Start Learning</button>
	</div>
    <div class="py" style="margin-left: 50%; margin-top: -26.4%;">
           <br>
		<div class="cir">
			<img src="php.png" style="border-radius: 40px; width: 120px; height: 120px; margin-top: 8%;">
        </div>
        <button class="btn">Start Learning</button>
	</div>
     <div class="more">
         <a href="">More Courses</a>
     </div>
   <div class="footer">
    	<a href="">About</a> <a href="" style="margin-left: 5%;">Courses</a><br>
    	<a href="">Feedback</a><a href="" style="margin-left: 5%;">Help</a>
    	<text>Follow us on:</text>
    	<div class="social">
    		<img src="facebook.png">
    		<img src="insta.png" style="margin-left: 1%;">
    		<img src="twit.png" style="margin-left: 1%; border-radius: 20px;">
    	</div>
    </div>
<script type="text/javascript">
	function ol(){
		alert("Welcome to online learning platform");
	}
	function py(){
		window.location = "py.html";
	}
</script>

</body>
</html>