<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myportfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/63237276ef.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="banner" id="header">
        <!-- this is a text message  -->
        <header>
            <a href="#header" class="logo">Portfolio</a>
            <ul class="menu">

                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

            <ul class="mobile"  id="sidemenu">

            <li><a href="#header" onclick="hideMenu()">Home</a></li>
            <li><a href="#about" onclick="hideMenu()">About</a></li>
            <li><a href="#services" onclick="hideMenu()">Services</a></li>
            <li><a href="#portfolio" onclick="hideMenu()">Portfolio</a></li>
            <li><a href="#contact" onclick="hideMenu()">Contact</a></li>
                <img src="images/close.png" alt=""onclick="closemenu()">
            </ul>
            <img src="images/menu.png" alt="" onclick="openmenu()">
        </header>

        <img src="images/Man.png" class="men">
        <div class="content">
            <div class="contentBx">
                <h4>Hello,</h4>
                <h2>I'm <span class="input"></span></h2>
                <h3>Professional Web Designer</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,totam rem aperiam,
                     quasi error sit voluptatum eaque ipsa quasi architec beatae vitae discta sunt exolicabo.</p>
                     <a href="#">Hire Me</a>
                     <a href="#">Download CV</a>
            </div>
        </div>


         <img src="images/1.png" class="elements1">
        <img src="images/2.png" class="elements2"> 

      
    </section>
    <div class="bg-container">
            <!-- about -->
    <div id="about">
            <div class="container">
                <div class="row">
                    <div class="about-col-1">
                        <img src="images/programmer.jpg" alt="">
                    </div>
                    <div class="about-col-2">
                        <h1 class="sub-title">About Me</h1>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,totam rem aperiam,
                        quasi error sit voluptatum eaque ipsa quasi architec beatae vitae discta sunt exolicabo.</p>
                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>
                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                                <li><span>Web Development</span><br> Web app Development</li>
                                <li><span>App Development</span><br>Building Android/IOS apps</li>
                            </ul>   
                        </div>
                        <div class="tab-contents" id="experience" >
                            <ul>
                                <li><span>2021 - Current</span><br>UI/UX Design Traning at ET Institute</li>
                                <li><span>2019 - 2021</span><br> WTeam lead at StartApp LLC.</li>
                                <li><span>2017 - 2019</span><br>UI/UX Desihn Executive at Coln Digital Ltd</li>
                                <li><span>2016 - 2017</span><br>Intership at ekart eCommerce</li>
                            </ul>   
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2016</span><br>UI/UX Design Traning at ET Institute</li>
                                <li><span>2016</span><br> MBA from Mit Bangalore.</li>
                                <li><span>2014</span><br> BBA from ISM Bangalore.</li>
                            </ul>   
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- services -->
    <div id="services">
        <div class="container">
        <h1 class="sub-title">My Services</h1>
        <div class="services-list">
            <div>
            <i class="fa-solid fa-code"></i>
                <h2>Web Design</h2>
                <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium,totam rem aperiam  
                </p>
                <a href="#">Learn more</a>
            </div>
            <div>
            <i class="fa-solid fa-crop"></i>
                <h2>UI/UX Design</h2>
                <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium,totam rem aperiam  
                </p>
                <a href="#">Learn more</a>
            </div>
            <div>
            <i class="fa-brands fa-app-store"></i>
                <h2>App Design</h2>
                <p>
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium,totam rem aperiam  
                </p>
                <a href="#">Learn more</a>
            </div>

        </div>
        </div>
    </div>


    <!-- portfolio -->

    <div id="portfolio">
        <div class="container">
        <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
            <img src="images/Archi.jpg" alt="">
            <div class="layer">
                <h3>Social Media App</h3>
                <p>The app connects you the talented people around the world.
                     Download it from play store.</p>
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            </div>
            <div class="work">
            <img src="images/blog.jpg" alt="">
            <div class="layer">
                <h3>Blog Website</h3>
                <p>The app connects you the talented people around the world.
                     Download it from play store.</p>
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            </div>
            <div class="work">
            <img src="images/health.jpg" alt="">
            <div class="layer">
                <h3>Online health App</h3>
                <p>The app connects you the talented people around the world.
                     Download it from play store.</p>
                     <a href=""><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            </div>
            </div>
        </div>
        <a href="#" class="btn">See more</a>
        </div>
    </div>
    <!-- contact -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>contact@example.com</p>
                    <p><i class="fa-solid fa-square-phone"></i>08144646901</p>
                    <div class="social-icons">
                        <a href="https://facebook.com/Awodele Opeyemi"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://twiter.com/Awodele sukuroh"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="https://instagram.com/Awodele sukuroh"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://linkedin.com/Awodele sukuroh"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="https://formsubmit.co/awodeleshukuroh@gmail.com" method="POST">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="message"  rows="10" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright @ Kevin. Made with <i class="fa-solid fa-heart"></i> by Easy Tutorials</p>
        </div>
    </div>
    </div>    



    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
        }
    </script> 

    <script>

        var sidemenu = document.getElementById("sidemenu");

        function openmenu(){
            sidemenu.style.right = "0";
            var navbar = document.querySelector('header .mobile');
            navbar.style.display = 'block';
        }
        
        function closemenu(){
            sidemenu.style.right = "-200px";
        }
        function hideMenu() {
            var navbar = document.querySelector('header .mobile');
            navbar.style.display = 'none';
        }
        
        </script>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

        <script>
            var typed = new Typed(".input",{
                strings:["Awodele Shukuroh", "Web Developer", "UI/UX Designer", "App Designer"],
                typeSpeed:70,
                backSpeed:65,
                loop:true
            })
        </script>
    
</body>
</html>