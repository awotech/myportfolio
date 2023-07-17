<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;
    
}

section{
    position: relative;
    width:100%;
    min-height:100vh;
    padding: 0 100px;
    display:flex;
    align-items: center;
    background: #21283a;
}

section::before{
content: '';
position: absolute;
top:50%;
right: 100px;
transform: translateY(-50%);
width:500px;
height: 500px;
border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
background: linear-gradient(to bottom left, rgb(245, 6, 125), rgb(185, 48, 185), rgb(148, 148, 238));
transition:1s;
}



section.active::before {
    background: #21283a;
    box-shadow: 0 0 0 1200px #1ede6d;
}

header{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    z-index:1000;
    display:flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 100px;

}

header .logo{
    font-size:1.5em;
    color:#fff;
    letter-spacing: 2px;
    font-weight:600;
    text-decoration: none;
    transition: 0.5s;
    transform-origin: right;
}

header .toggle{
    position: relative;
    width:30px;
    height: 30px;
    background:url(images/menu.png) ;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 30px;
    cursor: pointer;

}
header .toggle.active{
    background: url(images/close.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 25px;
}
.men{
    position: absolute;
    z-index: 2;
    bottom: 0;
    right: 150px;
    max-width: 400px;
}
.content{
    position:relative;
    z-index: 2;
    width:100%;
    display:flex;
    justify-content: flex-start;
    align-items:center;
    transition: 0.5s;
    transform-origin:right ;
}
.content .contentBx{
    position: relative;
    max-width:600px;
}
.content .contentBx h4{
    font-weight:400;
    color:#1ede6d;
    font-size:1.5em;
    letter-spacing:2px;
    margin-bottom:10px;
}
.content .contentBx h2{
    font-size:4em;
    line-height:1em;
    color:#fff;
}
.content .contentBx h3{
    font-weight:300;
    color:#fff;
    font-size:2em;
    line-height:1.5em;
}
.content .contentBx p{
font-size: 1em;
color:#fff;
margin:10px 0 20px;
font-weight:300;
}

.content .contentBx a{
    display:inline-block;
    color:#fff;
    padding:10px 20px;
    margin-right: 10px;
    margin-bottom: 10px;
    font-weight:500;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    background: #ed325f;
    letter-spacing: 2px;
}

.content .contentBx a:last-child{
    background: #1ede6d;
    color: #111;
}
.content .contentBx a:hover{
    letter-spacing:4px ;
    background: #fff;
    color:#111;
}
.banner.active .content,
.banner.active .logo{
    transform: scale(0);
    transform-origin:left ;
}
.menu{
    position: fixed;
    top: 0;
    left: 0;
    width:100%;
    display:flex;
    height:100%;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    padding-left: 100px;
    transition: 0.5s;
    z-index:2;
    visibility: hidden;
    opacity: 0;
}

.banner.active .menu{
    visibility: visible;
    opacity: 1;
}
.menu li{
    list-style:none;
}
.menu li a{
    color:#08381b;
    text-decoration: none;
    font-size:1.5em;
    padding:5px 10px;
    margin:5px 0; 
    display:inline-block;
    transition: 0.2s ease-in-out;
}
.menu li a:hover{
    letter-spacing: 6px;
    background: #fff;
    color:#161a23;
}

.elements1{
    position: absolute;
    top: 200px;
    right: 100px;
    width:100px;
    height:100px;
    object-fit: cover;
    transition: 0.2s;
    pointer-events: none;
}
.elements2{
    position: absolute;
    top: 400px;
    right: 600px;
    width:100px;
    height:100px;
    object-fit: cover;
    transition: 0.2s;
    pointer-events: none;
}

.banner.active .elements1,
 .banner.active .elements2{
    visibility: hidden;
    opacity: 0;
}
        </style>
 
</head>
<body>
    <section class="banner" id="header">
        <header>
            <a href="#header" class="logo">Portfolio</a>
            <div class="toggle"> </div>
        </header>

        <img src="images/Man.png" class="men">
        <div class="content">
            <div class="contentBx">
                <h4>Hello,</h4>
                <h2>I'm Shukuroh</h2>
                <h3>Professional Web Designer</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,totam rem aperiam,
                     quasi error sit voluptatum eaque ipsa quasi architec beatae vitae discta sunt exolicabo.</p>
                     <a href="#">Hire Me</a>
                     <a href="#">Download CV</a>
            </div>
        </div>

        <ul class="menu">
            <li><a href="#header">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

         <img src="images/1.png" class="elements1">
        <img src="images/2.png" class="elements2"> 

      
    </section>
    
    <script>
        const toggle = document.querySelector('.toggle');
        const banner = document.querySelector('.banner');
        toggle.onclick = function(){
            toggle.classList.toggle('active');
            banner.classList.toggle('active');
        }
        </script>
</body>
</html>