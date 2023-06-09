<!DOCTYPE html>
<html>
    <head>
        <title>My portifolio</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script>
        function validateForm(){
            var x=document.forms["myForm"]["fname"].value;

            if (x==null|| x==""){
                alert("Name must be filled out");
                return false;
            }
        }
        </script>
    </head> 
    <body align="center">
   
        
     <div id="navbar">
    <ul id="menu" >
        <br>
        <li><a href="my-portifolio.php">HOME</a></li>
        <li><a href="contact.php">CONTACT ME</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="skills.php">SKILLS</a></li>
    </ul>
    </div>
    

<img id="hpicture" src="mypicture.jpeg" widt h="500" height="700">
<h1>MY NAME IS MWAI MTAGALUKA <br>A PROGARMMER</h1>
<p>Welcome to my portifolio. Am a programmer dedicated to solve a lot of problems<BR> through my skills in programming.</p>
    <br><br>

    <p><h4> I was born in Blantyre on third july 2000. I did myprimary school at chichiri<br> and my secondary school as well.
        Am currently studying ICT at Mzuzu University<br> and am in level 2. I love web desgning and i wish to persue it 
        further to reach my full potential.<br> Am from Blantyre but currently living in the city of Lilongwe.<br> Am i am a programmer with skills in Java, C, Java Script and python.
    </h4></p>
    <br><br><br><br>

   

    <form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
        <p>If you need fast assistance, enter your details below and we will get back to you:</p>

        <lable for="name">Name:</lable>
        <input type="text" id="name" name="fname" placeholder="Enter your name here">
        <br><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">
        <br><br><br>

        <input  type="Submit" id="submit" name="submit" value="Submit">

    </form>

    <br><br><br><br><br>
    
    <div class="pro">
        <p style="text-align: center;">FEATURED PROJECTS</p>
        <br>
        <div class="slideshow-container">
            <div class="slideshow-images">

            </div>
            <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
            <a class="next" onclick="changeSlide(1)">&#10095;</a>
        </div>

    </div>

    <script>
        var slideIndex = 0;

        function showSlides() {
            var slides = document.getElementsByClassName("slideshow-images")[0].getElementsByTagName("img");

            for (var i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            slideIndex++;

            if (slideIndex > slides.length) {
                slideIndex = 1;
            }

            slides[slideIndex - 1].style.display = "block";

            setTimeout(showSlides, 2000);
        }

        function changeSlide(n) {
            slideIndex += n;
            showSlides();
        }

        var images = ["first.png", "second.png", "last.png"];

        for (var i = 0; i < images.length; i++) {
            var img = document.createElement("img");
            img.src = images[i];
            document.getElementsByClassName("slideshow-images")[0].appendChild(img);
        }
        showSlides();
    </script>
    </body>
    </html>

    