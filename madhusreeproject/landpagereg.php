<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<title>Landing Page</title>
</head>
<style>
	.navbar i{
		font-size:20px;
		margin-top:10px;
	}

form{
   margin-left:100px;
}
#reg{
	text-align:center;
}
form input{
	height:30px;
	width:200px;
	border-radius:10px;
}
form input:hover{
	border-radius: 20px;
}
form textarea{
	border-radius:10px;

}
form textarea:hover{
	border-radius: 20px;

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



	</div>

	<!-- Content -->
	<div class="line" id="Home">
		<div class="side1">
			<h1>CRAFT HAVEN</h1>

		</div>

        <img src="page.webp"height="500px"width="400px">
		<div class="side2">
			
		</div>
	</div>

	<section class="about" id="My Projects">
		<div class="content">
			<div class="title">
				<span>Craft Masters</span>
			</div>
			<div class="boxes">
				<div class="box">
					<div class="topic">
						<a href="" target="_blank">
							Sneh Gangal<br>
						</a>
					</div><br>
					<p>
                        <img src="sneh.jpg"height="200px"width="200px"><br>
					Her name Sneh translated to love and it was 
                    this love fro art that motivated her to persue painting despite
                    her family's disapproval
                <br><br>
                   <a href="https://snehgangal.com/"><button>Read More</button></a>
                    </p>
				</div>
				<div class="box">

					<div class="topic">
						<a href="" target="_blank">
						Ram Gopal Saini
						</a>
					</div>
					<p>
                        <img src="ram.jpg"height="200px"width="200px"><br>
                       Mr.Saini name is synonymous with blue pottery.
                       That his work is special is evident when he tells you that his pieces can be found.
                       <br><br>
                       <a href=""><button>Read More</button></a>
            
                    
                    </p>
				</div>

				<div class="box">
					<div class="topic">
						<a href="" target="_blank">
						Mohan lal sharma<br>
						</a>
					</div>
					<p>
                        <img src="mohan.jpg"height='200px'width='200px'><br>
						It is not often one comes across someone so 
                       
                     adept at their craft that they are able to transform the physical properties of materials they use for their work.
					<br><br>
                     <button>Read More</button>
                    </p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="about" id="My Projects">
	<div class="content">
		<div class="title">
			<span>Products</span>
		</div>
		<div class="boxes">
			<div class="box">
				<div class="topic">
					<a href="" target="_blank">
						paintings<br>
					</a>
				</div><br>
				<p>
					<img src="sneh.jpg"height="200px"width="200px"><br>
				Her name Sneh translated to love and it was 
				this love fro art that motivated her to persue painting despite
				her family's disapproval
			<br><br>
			   <a href="https://snehgangal.com/"><button>Read More</button></a>
				</p>
			</div>
			<div class="box">

				<div class="topic">
					<a href="" target="_blank">
					Ram Gopal Saini
					</a>
				</div>
				<p>
					<img src="ram.jpg"height="200px"width="200px"><br>
				   Mr.Saini name is synonymous with blue pottery.
				   That his work is special is evident when he tells you that his pieces can be found.
				   <br><br>
				   <a href=""><button>Read More</button></a>
		
				
				</p>
			</div>

			<div class="box">
				<div class="topic">
					<a href="" target="_blank">
					Mohan lal sharma<br>
					</a>
				</div>
				<p>
					<img src="mohan.jpg"height='200px'width='200px'><br>
					It is not often one comes across someone so 
				   
				 adept at their craft that they are able to transform the physical properties of materials they use for their work.
				<br><br>
				 <button>Read More</button>
				</p>
			</div><br>
		</div>
	</div>
</div><br>
</section>
<div id="reg">
<h1>Sign Up</h1>
</div>


<form method="post" action="landpage.php">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    
    <label for="email">Email:</label><br><br>
    <input type="email" id="email" name="email"><br><br>

	<label for="password">password:</label><br><br>
    <input type="password" id="password" name="password"><br><br>
    
    <label for="contact">Contact:</label><br><br>
    <input type="text" id="contact" name="contact"><br><br>
    
    <label for="address">Address:</label><br><br>
    <textarea id="address" name="address"></textarea><br><br><br>

	<label for="userSelection">Select a user:</label>
  <select id="userSelection" name="select">
    <option value="Artist">Artist</option>
    <option value="Buyer">Buyer</option>
    <!-- Add more options as needed -->
  </select><br><br>
    
    <input type="submit" value="Submit" onclick="abc()"><br>

</form>
						
					</div>

				<div class="input3">
					<div class="rightside1">
						<div class="title1">
							<span>
								Contact Us
							</span>
						</div>
						<div class="content1">
							A-143, 9th Floor, Sovereign 
							Corporate Tower, Sector-136, 
							Noida, Uttar Pradesh - 201305
						</div>90
						<div class="title1">
							<span>More Information</span>
						</div>
						<div class="content1">
							Greetings to all the Artists out there!
							We welcome you to the platform where we
							consistently strive to offer the best 
							of crafts. This platform has been 
							designed for everyone  wishing to 
							expand their shopping, share their 
							knowledge on the product . We have millions 
                            of crafts and artisans,and much more just for the 
							geek inside you.Thank you for choosing 
							and supporting us!
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	</section>
	<!-- Footer section -->
	<footer>
		<div class="footer">
			<span>
				Created By
				<a href="https://www.craftshaven.org/"
					target="_blank">
				
				</a>
			</span>
		</div>
	</footer>
	<script src="index.js"></script>

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
       function abc(){
        alert("Registation succesfully completed");
    }
	 </script>
</body>
</html>
