<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Craft Haven</title>
    <link rel="stylesheet" href="styles.css">
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

a {
	text-decoration: none;
	color: black;
}

</style>
<style>
    /* Your existing CSS styles */
/* You can add styles specific to the About section here */
#about {
    padding: 50px 0;
    background-color: #f9f9f9;
    text-align: center;
}

#about h2 {
    color: #333;
    font-size: 2em;
    margin-bottom: 20px;
}

#about p {
    color: #666;
    font-size: 1.1em;
    line-height: 1.6;
    margin-bottom: 20px;
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
                <li><a href="about.php">About</a></li>
                <li><a href="landpage.php">Sign Up</a></li>
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

    
                <section id="about">
                    <div class="container">
                        <h2>About CraftHaven</h2>
                        <p>Welcome to CraftHaven, your one-stop destination for unique handmade crafts and artworks!</p>
                        <p>At CraftHaven, we believe in the beauty of craftsmanship and the power of creativity. Our platform connects talented artisans with art enthusiasts, providing a space for artists to showcase their creations and for buyers to discover unique pieces that reflect their individuality.</p>
                        <p>Whether you're looking for handcrafted home decor, personalized gifts, or stunning artworks, CraftHaven has something for everyone. Our diverse collection features a wide range of crafts, including pottery, paintings, sculptures, textiles, and much more.</p>
                        <p>Join us in celebrating the art of making and the joy of owning something truly special. Explore CraftHaven today and discover the magic of handmade!</p>
                    </div>
                </section>
            
                <!-- Footer code -->
                <!-- Your existing code for footer -->
            
                <!-- JavaScript code -->
                <!-- Your existing JavaScript code -->
            </body>
            </html>
            