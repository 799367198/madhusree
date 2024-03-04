<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>
<style>
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

.line {
	display: flex;
	justify-content: space-between;
	align-items: center;
	margin: 2% 5%;
}
.line .side1 {
	padding-right: 50px;
}
.side1 h1 {
	font-size: 60px;
	margin-bottom: 10px;

}

.side1 button {
	width: 200px;
	padding: 12px 20px;
	border-radius: 20px;
	border-style: none;
	color: black;
	font-size: 17px;
	font-weight: 600;
}
.menu_box a{
	
	text-decoration:none;
}
.menu_box{
    height: 600px;
    width: 200px;
    border: 2px solid black;
    position: absolute;
    top: 13%;
    left: 0px;
    margin-left: 10px;
    background:white;
    visibility: hidden;
     color:black;
}
.menu_box span{
    position: absolute;
    top: 0;
    right: 0;
    margin: 10px;
    font-size: 25px;
    background: lightcoral;
    border-radius: 50%;
    height: 50px;
    width: 50px;
    text-align: center;
    padding-top: 12px;
    cursor: pointer;
}
.menu_box{
    font-size:20px;
}
.menu_box li{
    color:black;
    height:60px;
    text-align:center;
    list-style: none;
  
}
.menu_box li:hover {
    background-color:#8cc099;
    color:black
}

input{
    height:30px;
    width:200px;
    border-radius:10px;

}
input:hover{
    border-radius:20px;

}
#submit{
    background-color:lightgreen;
}

form{
    text-align:center;
    align-items:center;
    justify-content:center;

}
#order{
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
				<li><a href="#Home">Home</a></li>
                <li><a href="#My Projects">Artists</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="#contact">Sign Up</a></li>
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



	</div><br><br>
    <div id="order">
        <h1>Order Now</h1>
        <br>
    <form method="post" action="ordedatabase.php">
    <div id="orderreg">
        <lable for="name">Enter the name :<br>
        <input type="text"name="name"><br><br>
        
        <lable for="email">Enter the email :<br>
        <input type="text"name="email"><br><br>



        <lable for="contact">Enter your number:<br>
        <input type="number"name="number"><br><br>

        <lable for="address">Enter your address :<br>
        <input type="text"name="address"><br><br>



        <a href="orderrecieved"><input type="submit"id="submit"value="ORDER NOW"name="submit"></a>

</div>
</form>

	<!-- Content -->
	<div class="menu_box">
		<span onclick="menu_hide()">X</span>
		<hr>
		<br><br><br>
		<ul>
			
			<a href="crafts.php"><li>crafts</li></a><br>
			<a href="painting.php"><li>Paintings</li></a><br>
			<a href="artists.php"><li>artists</li></a><br>
			<a href="unique.php"><li>unique items</li></a><br>
			<a href=""><li>Orders</li></a><br>
			<a href="settings.php"><li>Settings</li></a><br>
		</ul>
		

	

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
