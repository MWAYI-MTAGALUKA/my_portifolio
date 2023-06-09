<!DOCTYPE html>
<html>
    <head>
        <title>My portifolio</title>
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
        <?php
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "portifolio";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        ?>
        
        <?php
        $sql = "SELECT * FROM skills";
        $result = $conn->query($sql);
        ?>
     <div id="navbar">
    <ul id="menu" >
        <br>
        <li><a href="my-portifolio.php">HOME</a></li>
        <li><a href="contact.php">CONTACT ME</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="skills.php">SKILLS</a></li>
    </ul>
    </div>
    
   
           <br><br><br><br><br><br>
    <div class="skills">
    <div  class="html-bar">
        <h4>HTML</h4>
        <div class="progress-bar" style="width: 80%";>
            <span data-width="80">80%</span>
        </div>
    </div>
    <br><br><br>

    <div class="css-bar">
        <h4>CSS</h4>
        <div class="progress-bar" style="width: 60%";   >
            <span data-width="60%">60%</span>
        </div>
    </div>
    <br><br><br>
    <div  class="javascript-bar" style="width: 40%"; >
        <h4>JAVASCRIPT</h4>
        <div class="progress-bar">
            <span data-width="40%">40%</span>
        </div>
    </div>
    <br><br><br>
    </div>
    <div class="skills">
        <?php
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $SkillName = $row["SkillName"];
                    echo "<div class=\"box\">";
                    echo "<p>$SkillName</p>";
                    echo "</div>";
                }
            } else {
                echo "Error: " . $conn->error;
            }
        ?>
        </div>
    </body>
</html>    