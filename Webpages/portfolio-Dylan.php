<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Set character set and viewport for responsiveness -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        // Set the page title dynamically using PHP
        $pageTitle = "The portfolio of Dylan";
        echo "<title>$pageTitle</title>";
    ?>
    
    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">
    
    <?php
        // Include the navigation bar using PHP
        include ('../Include/navbar.php');
    ?>
</head>
<body>
    <!-- Main content of the page -->
    <main>
        <!-- Section containing information about Dylan's portfolio -->
        <section class="D-portfolio">
            <div id="D-portfolio-intro">
                <!-- Title and introduction to the portfolio -->
                <h1>Welcome to My Portfolio</h1>
                <p>Hello! I'm Dylan van Schouwen, a passionate software development student.</p>
                <p>I am eager to learn and explore the vast world of programming. My journey so far has been filled with exciting projects and challenges, and I'm always looking for opportunities to expand my skills.</p>
            </div>

            <div id="D-portfolio-selfie">
                <!-- Image section displaying Dylan's photo -->
                <img src="../Images/Dylan.png" alt="Dylan's Photo" id="D-portfolio-selfie-img">
            </div>

            <div id="D-portfolio-main">
                <!-- Education and projects information -->
                <h2>Education</h2>
                <p>Currently pursuing a Software Development level 4 diploma at TCR College in Rotterdam. Started in 2022 and expected to graduate in 2026.</p>

                <h2>Projects</h2>
                <p>One of my notable projects involved creating a replica of the Media Markt website, incorporating databases. I have experience in developing websites using Javascript, PHP, HTML, and CSS. While (according to my personal opinion) I am proficient in HTML, CSS, and PHP. I am actively working on improving my JavaScript skills.</p>
                
                <!-- Skills section with programming languages, web development, and soft skills -->
                <div class="D-Skills">
                    <div>
                        <h2>Skills</h2>
                        <ul id="skills-list">
                            <li>Programming Languages: HTML, CSS, PHP, JavaScript, MySQL</li>
                            <li>Web Development: Front-end and Back-end</li>
                            <li>Database Management (MySQL)</li>
                        </ul>
                    </div>
                    <div>
                        <h2>Soft Skills</h2>
                        <ul id="soft-skills-list">
                            <li>Problem-solving</li>
                            <li>Team Collaboration</li>
                            <li>Attention to Detail</li>
                            <li>Adaptability</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Language proficiency section -->
                <h2>Language Proficiency</h2>
                <p>Fluent in Dutch (native) and proficient in English.</p>
            </div>

            <div id="D-portfolio-outro">
                <!-- Contact information and additional links -->
                <h2>Contact Information</h2>
                <p>Feel free to contact me:</p>
                <ul>
                    <li>Phone: +31 6 14786052</li>
                    <li>Email: Dylanvanschouwen@gmail.com</li>
                </ul>
                <ul> 
                    <li>Portfolio <a href="https://dylanvanschouwen.carrd.co/">Carrd with more social links</a></li>
                    <li>LinkedIn: <a href="https://www.linkedin.com/in/dylan-van-schouwen-1ba01626a/">My LinkedIn page</a></li>
                </ul>
            </div>
        </section>
    </main>

    <?php
        // Include the footer using PHP
        include ('../Include/footer.php');
    ?>
</body>
</html>
