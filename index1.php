<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Applied catalysis labarotery</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font.css">
    <link rel="script" href="scripts.js">
    <link rel="stylesheet" href="line.css">
</head>
<body>
    <!-- Header -->
    <header class="animate__animated animate__slideInDown">
        <div class="logo">Applied catalysis labarotery</div>
        <nav>
            <ul>
                <li class="skill"><a href="#home">Home</a></li>
                <li class="skill"><a href="#about">About</a></li>
                <li class="skill"><a href="#skills">Skills</a></li>
                <li class="skill"><a href="#projects">Projects</a></li>
                <li class="skill"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <h1 class="banner">Assistent professor of organic chemistry</h1>
        <p>A passionate Assistent professor</p>
        <a href="#projects" class="cta-button" class="skill">Explore My Work</a>
    </section>

    <!-- About Me -->   
    <section id="about" class="about-section">
        <div><img src="professor1.avif" alt="Knowladge is everywhere" width="250" height="250"></div>
        <nav><h2>About Me</h2>
        <p>Hello! I'm Dr. vijay parewa, A passionate Assistent professor of organic chemistry with expertise in building cutting-edge websites and applications. My journey in web development has equipped me with skills to create responsive, user-friendly, and visually appealing digital experiences.</p>
        <a href="resume.pdf" class="cta-button">Download Research paper</a>
        </nav>
    
    </section>

    <!-- Student info -->
    
<?php

ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', '/path/to/error.log'); // Specify your error log file

    include("connection2.php");
    $query = "SELECT * FROM student";
    $data = mysqli_query($deta, $query);
    $total = mysqli_num_rows($data);
    error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 0);

    if($total != 0)
    {
        ?>
        <center>
        <h1><mark>Student info table</mark></h1>
        <table border="3px" cellspacing="7" width="95%">
            <tr>
            <th width="5%">No</th>
            <th width="10%">Name</th>
            <th width="10%">Mobile</th>
            <th width="10%">Email</th>
            <th width="10%">Duration</th>
            <th width="15%">Publications</th>
            <th width="15%">Link</th>
            <th width="15%">Status</th>

            </tr>

        <?php
        while($result = mysqli_fetch_assoc($data))
        {
            echo
            "<tr>
                <td> ".$result['No']."</td>
                <td> ".$result['Name']."</td>
                <td> ".$result['Mobile_no']."</td>
                <td> ".$result['Email']."</td>
                <td> ".$result['Duration']."</td>
                <td> ".$result['Publications']."</td>
                <td><a href='" . $result['Link'] . "' target='_blank'>" . $result['Link'] . "</a></td>
                <td> ".$result['Status']."<br></td>
            </tr>";
        }
    }
    else
    {
        echo "no record in table";
    }
    $result = mysqli_fetch_assoc($data);
    echo "There are" .$total.$result. "Element in table";
?>
</table>
</center>

    <!-- Skills -->
    <section id="skills" class="skills-section">
        <h2>Research Topics</h2>
        <div class="skills-container">
            <div class="skill">HTML</div>
            <div class="skill">CSS</div>
            <div class="skill">JavaScript</div>
            <div class="skill">React</div>
            <div class="skill">Node.js</div>
        </div>
    </section>

    <!-- Projects -->
    <section id="projects" class="projects-section">
        <h2>Projects</h2>
        <div class="projects-container">
            <div class="project">
                <img src="project1.png" alt="Project 1">
                <h3>Project 1</h3>
                <p>A brief report of Project 1.</p>
                <a href="#" class="cta-button">View Project report</a>
            </div>
            <div class="project">
                <img src="project2.avif" alt="Project 2">
                <h3>Project 2</h3>
                <p>A brief description of Project 2.</p>
                <a href="#" class="cta-button">View Project report</a>
            </div>
            <div class="project">
                <img src="project3.png" alt="Project 3">
                <h3>Project 2</h3>
                <p>A brief description of Project 3.</p>
                <a href="#" class="cta-button">View Project report</a>
            </div>
        </div>
    </section>
    
    <!-- Contact -->
    <section id="contact" class="contact-section">
        <h2>Contact Me</h2>
        <form id="contact-form" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="mobile" placeholder="Mobile Number" required pattern="\d{10}">
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="text" name="organization" placeholder="Organization">
            <textarea name="message" placeholder="Message" required></textarea>
            <input type="submit" value="submiting" name="submited" class="button">
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>Applied catalysis labarotery, All rights reserved.</p>
        <div class="social-media">
            <a href="https://linkedin.com">LinkedIn</a>
            <a href="https://github.com">GitHub</a>
            <a href="https://twitter.com">Twitter</a>
        </div>
    </footer>
    
    <!-- Experiment -->
    <script href="script.js"></script>
    <button class="back-to-top">↑</button>
    <button onclick="document.body.classList.toggle('dark-mode')">Toggle Dark Mode</button>

</body>
</html>

<?php
    include("connection.php");
?>