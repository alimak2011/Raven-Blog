<!DOCTYPE html>
<html>
<head>
    <title>Raven Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    {{-- <script>
        function showmore() {
            document.getElementById('smO').setAttribute("style","display:block;width:500px");
            document.getElementById('smO').style.height='500px';
            
        }

        
    </script> --}}





    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");
    
    
    
    body {
      font-family: "Quicksand", sans-serif;
      
      background: #ffffff;
      background: linear-gradient(to right, #050505, #000000, #030000);
    }
    
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      max-width: 1200px;
      margin-block: 2rem;
      gap: 2rem;
    }
    
    img {
      max-width: 100%;
      

      display: block;
      object-fit: cover;
    }
    
    .card {
      display: flex;
      flex-direction: column;
      width: clamp(20rem, calc(20rem + 2vw), 22rem);
/*       height: clamp(40rem, calc(40rem + 4vw), 44rem);
 */
      overflow: hidden;
      
      box-shadow: 0 .1rem 1rem rgba(219, 219, 219, 0.856);
      border-radius: 1em;
      background: #ECE9E6;
    background: linear-gradient(to right, #FFFFFF, #ECE9E6);
    
    }
    .card:hover {
      box-shadow: 0 15px 10px -10px rgba(31, 31, 31, 0.5);
    transition: all 0.3s ease;
    transform: scale(1.1);
}
    
    
    
    .card__body {
      padding: 1rem;
      display: flex;
      flex-direction: column;
      gap: .5rem;
    }
    
    
    .tag {
      align-self: flex-start;
      padding: .25em .75em;
      border-radius: 1em;
      font-size: .75rem;
    }
    
    .tag + .tag {
      margin-left: .5em;
    }
    
    .tag-blue {
      background: #56CCF2;
    background: linear-gradient(to bottom, #2F80ED, #56CCF2);
      color: #ffffff;
    }
    
    .tag-brown {
      background: #D1913C;
    background: linear-gradient(to bottom, #FFD194, #D1913C);
      color: #ffffff;
    }
    
    .tag-red {
      background: #cb2d3e;
    background: linear-gradient(to bottom, #ef473a, #cb2d3e);
      color: #ffffff;
    }
    
    .card__body h4 {
      font-size: 1.5rem;
      text-transform: capitalize;
    }
    
    .card__footer {
      display: flex;
      padding: 1rem;
      margin-top: auto;
    }
    
    .user {
      display: flex;
      gap: .5rem;
    }
    
    .user__image {
      border-radius: 50%;
      width: 50px;
      height: 50px;
      
    }
    
    .user__info > small {
      color: rgba(255, 255, 255, 0.904);
    }
    
    
    .topnav {
      background-color: transparent;
      overflow: hidden;
    }
    
    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: rgb(0, 0, 0);
      color: rgb(255, 255, 255);
      box-shadow: 0 15px 10px -10px rgba(255, 255, 255, 0.904);
      border-color: rgb(226, 226, 226);
      transition: transform 0.3s, opacity 0.3s;

    }
    
    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }


    .image-area
{
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	position: absolute;
}

.img-wrapper
{
	width: 300px;
	height: 400px;
	position: relative;
	overflow: hidden;
}

.img-wrapper:before
{
	content: '';
	position: absolute;
	top: 0;
	left: 180%;
	height: 100%;
	width: 100%;
	background: rgba(255,255,255,.3);
	z-index: 1;
	transform: skew(45deg);
	transition: .5s;
}

.img-wrapper:hover:before
{
	left: -180%;
}

.img-wrapper img
{
	height: 400px;
	width: 300px;
	filter: grayscale(100%);
	transition: 2s;
}
.img-wrapper:hover img
{
	filter: grayscale(0%);
	transform: scale(1.1);
}

.img-wrapper h2
{
	background: tomato;
	font-family: Poppins;
	color: #fff;
	text-align: center;
	text-transform: uppercase;
	margin: 0;
	padding: 10px 0;
	position: absolute;
	bottom: 0;
	width: 100%;
	transform: perspective(400px) rotateY(90deg);
	transform-origin: right;
	transition: 1s;
}

.img-wrapper:hover h2
{
	transform: perspective(400px) rotateY(0deg);
}

.img-wrapper ul
{
	position: absolute;
	top: 0;
	left: 0;
	margin: 0;
	padding: 0;
	list-style: none;
	background: rgba(255,255,255,0);
}

.img-wrapper ul li
{
	background: #333;
	height: 40px;
	width: 40px;
	text-align: center;
	line-height: 40px;
	transform: perspective(800px) rotateY(90deg);
	transition: .5s;
	transform-origin: left;
}

.img-wrapper:hover ul li
{
	transform: perspective(800px) rotateY(0deg);
}

.img-wrapper:hover ul li:nth-child(1)
{
	transition-delay: .2s;
}

.img-wrapper:hover ul li:nth-child(2)
{
	transition-delay: .6s;
}

.img-wrapper:hover ul li:nth-child(3)
{
	transition-delay: .8s;
}

.img-wrapper:hover ul li:nth-child(4)
{
	transition-delay: 1s;
}

.img-wrapper ul li a
{
	color: tomato;
	background: rgba(255,255,255,0);
}

.img-wrapper ul li i
{
	color: tomato;
	background: rgba(255,255,255,0);
}

.img-wrapper ul li i:hover
{
	color: #fff;
	background: rgba(255,255,255,0);
}
    
    
    </style>










</head>
<body>
    <div class="topnav">
        <a class="" href="{{ route('products.index') }}">Home</a>
        <a class="btn btn-primary" href="{{ route('products.create') }}"> Create New Post</a>
    
        <a href="#contact">Community</a>
        <a href="/author">About Author</a>
      </div>
  
<div class="container">
    @yield('content')
</div>



   
</body>
</html>