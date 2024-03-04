<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0px;
        padding:0px;
    }
    form{
        text-align:center;
        align-items:center;
        justify-content:center;
    }
    form input{
        border-radius:10px;
        height:30px;
        width:300px;
    }
    form input:hover{
        border-radius:20px;
    }
    * {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}
button{
	background-color:orange;
	color:black;


}
button{
	border-radius: 5px;
}
button:hover{
	background:aqua;
	border-radius:20px;
	
      
}
body {
	background-color: white;
	color: black;
	font-family: "Fira Sans", sans-serif;
	background-color: white;
}

nav {
	width: 100%;
	height: 80px;
	display: flex;
	justify-content: space-between;
	padding: 20px 5%;
	background-color: #8cc099;
}

nav .heading {
	font-size: 30px;
	font-weight: 700;
	color: white;
}

nav ul {
	display: flex;
	list-style: none;
}

nav ul li {
	padding: 8px 15px;
	border-radius: 10px;
	transition: 0.2s ease-in;
}

nav ul li a {
	color: black;
	font-size: 20px;
	font-weight: 500;
	text-decoration: none;
	color: white;
}

nav ul li:hover {
	background-color: green;
}

nav ul li a:hover {
	color: white;
}

nav .sideMenuButton {
	font-size: 30px;
	font-weight: bolder;
	cursor: pointer;
	display: none;
}
#user{
	height:30px;
	width:150px;
	border-radius: 30px;
	
}


.sideNavigationBar {
	height: 100%;
	position: fixed;
	top: 0;
	right: 0%;
	background-color: green;
	overflow-x: hidden;
	transition: 0.3s ease-in;
	padding-top: 60px;
	display: none;
}

.sideNavigationBar a {
	padding: 8px 8px 8px 40px;
	display: block;
	font-size: 25px;
	font-weight: 500;
	color: #d1d1d1;
	transition: 0.3s;
	text-decoration: none;
}

.sideNavigationBar a button {
	padding: 10px 20px;
	border-radius: 10px;
	color: green;
	font-size: 16px;
	border-style: none;
	font-weight: 700;
}

.sideNavigationBar a:hover {
	color: white;
}

.sideNavigationBar .closeButton {
	position: absolute;
	top: 10px;
	right: 25px;
	font-size: 20px;
	margin-left: 50px;
}


/* responsive navbar css */
@media screen and (max-width: 600px) {
	nav .sideMenuButton {
		display: flex;
	}

	nav .navbar {
		display: none;
	}

	.sideNavigationBar {
		display: block !important;
	}
}
.side1{
    text-align:center;
    align-items:center;
    justify-content: center;
}
</style>
<body>
<nav>
		<i class="fa fa-bars" style="font-size: 20px"onclick=menu_open()></i>
		<div class="heading">CrAfThaVeN</div>

		
		<div class="navbar">
			<ul>
				<li><a href="landpage.php">Home</a></li>
                <li><a href="landpage.php">Artists</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="landpage.php">Sign Up</a></li>
				<i class="fa fa-shopping-cart"></i>
			
			</ul>

		</div>
	</nav>

	<!-- Side navigation bar for 
		responsive website -->
	<div class="sideNavigationBar"
		id="sideNavigationBar">
		<a href="#" class="closeButton"
			onclick="closeNavbar()">
			
			
		</a>
		<a href="#">Home</a>
		<a href="#">Artists</a>
		<a href="#">About</a>
		<a href="#">Sign Up</a>



	</div>

	<!-- Content -->
	<div class="line" id="Home">
		<div class="side1">
			<h1>CRAFT HAVEN</h1>

		</div>
<br><br>
    <div id="jyoshna">
        <form method="post" action="product.php">
            <lable for="productid">Product Id</label><br><br>
            <input type="number" id="productid" name="productid"><br><br>

            <lable for="artistid">Artist Id</label><br><br>
            <input type="number" id="prtistid" name="artistid"><br><br>

            <lable for="title">Product title</label><br><br>
            <input type="text" id="title" name="title"><br><br>

            <lable for="price">Price</label><br><br>
            <input type="number" id="price" name="Price"><br><br>

            <lable for="avalibility">Avalibility</label><br><br>
            <input type="boolean" id="avalibility" name="avalibility"><br><br>

            <input type="submit" name="submit"style="background-color:lightgreen"><br>
</div>
<div class="menu_box">
		<span onclick="menu_hide()">X</span>
		<hr>
		<br><br><br>
		<ul>
			
			<a href="crafts.html"><li>crafts</li></a><br>
			<a href="painting.html"><li>Paintings</li></a><br>
			<a href="artists.html"><li>artists</li></a><br>
			<a href="unique.html"><li>unique items</li></a><br>
			<a href=""><li>Orders</li></a><br>
			<a href="settings.html"><li>Settings</li></a><br>
		</ul>
	 </div>
	<script>
		let menu_bx=document.querySelector(".menu_box");
	   function menu_open(){
		menu_bx.style.visibility="visible"
	   }
	   function menu_hide(){
		menu_bx.style.visibility="hidden"
	   }
	
	 </script>
   
</body>
</html>