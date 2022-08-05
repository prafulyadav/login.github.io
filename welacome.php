
<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
  <title>praful</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- linking css file -->
  <link rel="stylesheet" href="style.css">
  <!-- bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- font awesome -->
  <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
</head>
<style>
/* display background color black on navbar scroll */



h2 {
    margin-top: -100px;
    margin-bottom: 0.5rem;
    font-weight: 500;
    line-height: 1.2;
}




button {
        text-decoration: none;
        /* display: block; */
        color: rgb(0, 0, 0);
        background-color: rgb(2 170 255);
        border-radius: 20px;
        text-align: center;
        margin: 13px auto;
        padding: 0px;
        border: transparent;
        position: relative;
        /* width: 29%; */
        height: 46px;
        font-size: x-large;
        top: -11px;
        left: 2px;
    }

button:hover {
        background-color: aliceblue;

    }

    button:active {
        background-color: rgb(140, 201, 255);
    }


#link1 {
        color: #000;
        text-align: left;
        font-weight: bold;
        text-decoration: none;
    }
    button #ei {


color: #000;
text-align: left;
font-weight: bolder;
text-decoration: none;

padding: 13px;
position: relative;

height: 46px;

}


#e{
    
      
      margin: 0;
      font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
      font-size: 1rem;
      font-weight: 500;
      line-height: 1.5;
      color: #f9f9f9;
      text-align: left;
      background-color: #fff;
  
        height:55vh;
        
        background-size:cover;
      position:relative;
      
}

.navbarScroll.navbarDark {
    background-color: black;
}

/* hero background image */
.bgimage {
    height:100vh;
    background:url('sdd.jpeg');
    background-size:cover;
    position:relative;
}
/* text css above hero image*/
.hero_title {
    font-size: 4.5rem;
}
.hero_desc {
    font-size: 2rem;
}
.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
}

/* spacing on all sections */
/* #about, #services, #portfolio, #contact {
    margin-top: 4rem;
    padding-top: 4rem;
} */
#contact {
    padding-bottom: 4rem;
}
/* about section image css */
.imageAboutPage {
    width: 100%;
}

/* services section css */
.servicesText.card {
    height: 280px;
    cursor: pointer;
  }
.servicesIcon {
    font-size: 36px;
    text-align: center;
    width: 100%;
}
.card-title {
    text-align: center;
}
.card:hover .servicesIcon {
    color: #008000;
}
.servicesText:hover {
    border: 1px solid #008000;
}

/* social media icons styling */
.social-icons {
    font-size: 36px;
    cursor: pointer;
}
.fa-facebook:hover,.fa-instagram:hover,.fa-twitter:hover,.fa-linkedin:hover, .fa-twitch:hover {
    color: #008000;
}
.fab {
    color: #000000;
}
/* footer styling */
#footer {
    background-color: #808080;
    text-align: center;
}
</style>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark navbarScroll">
        <div class="container">
         
            <a class="navbar-brand" href="#">P R A F U L  Y A D A V</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/login/%20logout1.php">Logout</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    <!-- main banner -->
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                <h2 class="hero_title">Hi, it's me  Praful</h2>
                <p class="hero_desc">I am a professional freelancer in Aligarh City</p>
            </div>
            </div>
        </div>
    </section>

    <!-- about section-->
    <section id="about">
        <div class="container mt-4 pt-4">
            <h1 class="text-center">About Me</h1>
            <div class="row mt-4">
                <div class="col">
                    <img src="pppp.jpeg" class= "imageAboutPage" alt="">
                </div>

                <div class="col-lg-8">
                    <p> My name is Sweta Gupta, and I’m a computer science Student 
                        
                    </p>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul>
                                <li>Name: praful yadav</li>
                                <li>Age: 19</li>
                                <li>Occupation: Software Developer</li>

                            </ul>
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <p> I’m a Software Developer, and I’m seeking an work from home part time project that will use my organization, attention to detail and time management skills."When something is important enough, you do it even if the odds are not in your favor." 

Software developers conceive of, design, and build computer programs. Some develop new applications for mobile or desktop use, while others build underlying operating systems. Either way, software developers identify user needs, build programs, test out new software, and make improvements.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- services section-->
    <section id="services">
        <div class="container">
            <h1 class="text-center">Services</h1>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class="fas servicesIcon fa-clock"></i>
                            <h4 class="card-title mt-3">Website Development</h4>
                            <p class="card-text mt-3">Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet i.e. websites.


                            </p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-layer-group'></i>
                            <h4 class="card-title mt-3">Website Design</h4>
                            <p class="card-text mt-3">Create a beautifully designed website in no time with Wix ADI (Artificial Design Intelligence). Just answer a few questions and you’ll get a fully designed site with content and images built-in. Make it your own by choosing a design theme and a custom color palette that fits the look you’re going for.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='far servicesIcon fa-check-circle'></i>
                            <h4 class="card-title mt-3">Website Deployment</h4>
                            <p class="card-text mt-3">Web Deploy is an extensible client-server tool for syncing content and configuration to IIS. Web Deploy is used primarily in two scenarios: Developers use it to sync (aka 'publish') a compiled web applications (ASP . Net, PHP etc)
                            </p>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-search'></i>
                            <h4 class="card-title mt-3">SEO</h4>
                            <p class="card-text mt-3">Search engine optimization (SEO) is the process of improving the visibility of a website or webpage on a search engine results page (SERP) so as to make a company’s website more discoverable (i.e., on the first page/s), thereby driving traffic and sales.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-shield-alt'></i>
                            <h4 class="card-title mt-3">DevOps</h4>
                            <p class="card-text mt-3">
                                
DevOps is the combination of cultural philosophies, practices, and tools that increases an organization's ability to deliver applications and services at high velocity: evolving and improving products at a faster pace than organizations using traditional software development.
                            </p>
                        </div>
                    </div>  
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <i class='fas servicesIcon fa-wrench'></i>
                            <h4 class="card-title mt-3">QA</h4>
                            <p class="card-text mt-3">Quora is a site where people post answers to your questions.  Try Quora out!
                            </p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>

  
    <!-- contact section-->
    <section id="contact">
        <div class="container mt-3 contactContent">
            <h1 class="text-center">Contact Me</h1>

            <div class="row mt-4">
                <div class="col-lg-6">
                    <!-- to edit google map goto https://www.embed-map.com type your location, generate html code and copy the html  -->
                    <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:500px;"><div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/directions?origin=Aligarh&destination=Kasimpur+power+house&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemaps-code" href="https://www.embed-map.com" id="get-data-forembedmap">https://www.embed-map.com</a><style>#googlemaps-display img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
                </div>
                <div class="col-lg-6">
                    <img id="e" src="lll.png" alt="">
                    <h3> 👇🏻 👇🏻    Join our Whats app group by click this button</h3>
                    
                    <button><a id="ei" href="https://chat.whatsapp.com/FtNqr10ntVJDDF79gSPm09">Join now !!</a></button>
                    <div>
             
            </div>
                



            
          



                

               

            </div>
        </div>
    </section>
    <!-- footer section-->
    <footer id="footer">
        <div class="container-fluid">
            <!-- social media icons -->
            <div class="social-icons mt-4">
                <a href="https://www.facebook.com/profile.php?id=100061875865770" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com/iam.praful_rao?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/praful-yadav-b46100215" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <!-- load javascript after loading all html content -->
    <script>
        const header = document.querySelector('.navbar');
console.log(header)
window.onscroll = function() {
    const top = window.scrollY;
    if(top >=100) {
        header.classList.add('navbarDark');
    }
    else {
        header.classList.remove('navbarDark');
    }
}
// collapse navbar after click on small devices
const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarSupportedContent')

navLinks.forEach((l) => {
    l.addEventListener('click', () => { new bootstrap.Collapse(menuToggle).toggle() })
})
    </script>

</body>

</html>
