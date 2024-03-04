<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<style>
  
  body{
    margin:0px;
    padding:0px;
    

  }
  #header ul{
    display:flex;
    gap:60px;
    align-items:center;
    justify-content:center;
    text-decoration: none;
    list-style: none;

  }

  #header a{
    text-decoration: none;
    color:black;
  }
  #head h1{
    text-align: center;
    align-items: center;
    justify-content: center;


  }
  #head span{
    color:red;
   
  }

  #head span{
    color:red;
    font-style: italic;
    border-bottom: 2px solid red;
  }
  img{
    height:150px;
    width:300px;
  }
  .div1{
    display:flex;
    gap:50px;
  }
  #first{
    height:400px;
    width:300px;
    border:1px solid black;

  }
  #first:hover{
    box-shadow:5px 5px 5px 5px gray;
  }
  #first h4{
    text-align:center;
    color:red;
  }
  #first span{
   display: flex;
    text-align:center;
    justify-content: center;
  }
  #first button{
    background-color:black;
    color:white;
    height:20px;
    width:100px;
    margin-left:90px;
  }
  #first button:hover{
    box-shadow:2px 2px 2px gray;
  }
  .jyo{
    display: flex;

  }

#jyothi{
    float: right;
    font-size:30px;
    padding-right:30px;


}
#first span{
  text-align:cnetr;
  align-items:center;
  justify-content: center;
}
#mahi{
    float:right;
    gap:50px;
    display:flex;
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
font-weight: lighter;
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
.side1 h1{
  text-align:center;
}
.search-container {
  margin-top: 20px;
  text-align: center;
}

input[type="text"] {
  padding: 10px;
  width: 200px;
  border-radius: 5px;
  border: 1px solid #ccc;
}

#itemsList {
  margin-top: 20px;
}

.item {
  padding: 10px;
  border: 1px solid #ccc;
  margin-bottom: 5px;
  display: block;
}


</style>
<body>
  <nav>
		<i class="fa fa-bars" style="font-size: 20px"onclick=menu_open()></i>
		<div class="heading"style="text-align:center">CrAfThaVeN</div>
		
		<div class="navbar">
			<ul>
				<li><a href="landpage.html">Home</a></li>
        <li><a href="artists.html">Artists</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="landpage.html">Sign Up</a></li>
        <div class="search-container">
          <input type="text" id="searchInput" placeholder="Search...">
          <a href="like.html"><i class="fa fa-heart"></i></a>
      </div>
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
			<h1 style="text-align:center">Paintings</h1>

		</div>
		<div class="side2">
			
		</div>
	</div>

    <div id="menu1">
        <div class="div1">
            <div id="first">
                <img src="paint1.jpeg"><br>
                <h4>Buterfly painting</h4><br>
                <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span><br>
                <span>Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
                <b><span style="color:red">$12.00</span></br>
                 <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
            </div>
            <div class="div1">
                <div id="first">
                    <img src="paint2.jpeg">
                        <h4>A wall Paint</h4><br>
                        <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                        <span> Lorem ipsum dolor sit amet <br>consectetur adipisicing elit<br>. Omnis, repellendus.</span><br>
                        <br><b><span style="color:red">$16.00</span></b>
                        <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </div>
                <div class="div1">
                    <div id="first">
                        <img src="paint3.jpeg"><br>
                        <h4>A women Paint</h4> <br>
                        <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                        <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
                        <br><b><span style="color:red">$19.00</span></b>
                        <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="div1">
                    <div id="first">
                        <img src="paint4.jpeg"><br>
                        <h4>Wall Paint</h4><br>
                        <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                        <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
                        <br><b><span style="color:red">$20.00</span></b>
                     <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
   <div class="jyo">
    <div id="menu1">
      <div class="div1">
          <div id="first">
              <img src="paint1.jpeg"><br>
              <h4>Buterfly painting</h4><br>
              <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i></span><br>
              <span>Lorem ipsum dolor sit amet<br> consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
              <b><span style="color:red">$12.00</span></br>
               <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
          </div>
          <div class="div1">
              <div id="first">
                  <img src="paint2.jpeg">
                      <h4>A wall Paint</h4><br>
                      <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                      <span> Lorem ipsum dolor sit amet <br>consectetur adipisicing elit<br>. Omnis, repellendus.</span><br>
                      <br><b><span style="color:red">$16.00</span></b>
                      <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  </div>
              <div class="div1">
                  <div id="first">
                      <img src="paint3.jpeg"><br>
                      <h4>A women Paint</h4> <br>
                      <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                      <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
                      <br><b><span style="color:red">$19.00</span></b>
                      <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                  </div>
              </div>
              <div class="div1">
                  <div id="first">
                      <img src="paint4.jpeg"><br>
                      <h4>Wall Paint</h4><br>
                      <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-half-o" aria-hidden="true"></i> </span><br> 

                      <span>Lorem ipsum dolor sit amet <br>consectetur adipisicing elit.<br> Omnis, repellendus.</span><br>
                      <br><b><span style="color:red">$20.00</span></b>
                   <br><a href="orderplace.php"><button>ORDER</button></a><span id="jyothi"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
         
                        </div>
                        <div class="menu_box">
                          <span onclick="menu_hide()">X</span>
                          <hr>
                          <br><br><br>
                          <ul>
                            
                            <a href="crafts.php"><li>crafts</li></a><br>
                            <a href="painting.php"><li>Paintings</li></a><br>
                            <a href="artists.php"><li>artists</li></a><br>
                            <a href="unique.php"><li>unique items</li></a><br>
                            <a href="orders.php"><li>Orders</li></a><br>
                            <a href="settings.php"><li>Settings</li></a><br>
                            <a href="product.php"><li>Insert products</li></a><br>
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
                             <script src="script.js"></script>
    
</body>
</html>