<!DOCTYPE html>
<html>
    <head>
        <title>Projects</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            const check = () => {
                const progressBar = document.querySelector('.progress-bar')
                progressBar.setAttribute('id','start-animation')
            }
        </script>    
    </head>
    <body align="center">
    
    <div id="navbar">
        <ul id="menu">
            <br>
            <li><a href="my-portifolio.php">HOME</a></li>
            <li><a href="contact.php">CONTACT ME</a></li>
            <li><a href="projects.php">PROJECTS</a></li>
            <li><a href="skills.php">SKILLS</a></li>
        </div>
       
        <h1>My featured Projects</h1>
        <p><h4>Ever since i started programming, i have worked on several projects. Mostly, i have created projects using C and below is one of the projects.<br><BR>This is a program that is used to order food in a food store and i have illustrated how it works using pictures.</h4><br>     </p>
            <br><br><br><br><br>

            <h4>1. The customer is prompted to choose Pizza or chips</h4>
            <br><br>
            <img id="first" src="first.png" width="500" height="500" >   
            <br><br><br><br><br><br><br>

            <h4> 2. Whether the customer selects 1 for pizza or 2 for chips, he/she is asked to select 3 if drinks are needed.</h4>
            <br><br>
            <img id="second" src="second.png" width="500" height="500">
            <br><br><br><br><br><br><br>

            <h4>3. The customer is given a list of choices.</h4>
            <br><br>
            <img id="third" src="third.png" width="500" height="500">
            <br><br><br><br><br><br><br>

            <h4>4. At last the customer is given details of the food purchased and the total amount of the purchase.</h4>
            <br><br>
            <img id="last" src="last.png" width="500" height="500">
            <br><br><br><br>

            <h4>Click the button to check progress:</h4>
            <button onclick="check()">Check</button>


            <div  class="container">
                <h4> PROJECT'S PROGRESS</h4>
                <div class="progress-bar">
                    <spna data-width="60%">60%</spna>
                </div>
            </div>
            <br><br><br><br>

    </body>    
</html>