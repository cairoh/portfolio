
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alyuba Cornelius</title>

    <link rel="icon" href="img/logo1.icon" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/logo1.png">
    <link rel="shortcut icon" href="img/logo1.icon" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="img/logo1.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="jss/index.js">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body>
    <header>
        <div id="logo">
            <h1> <img src="img/logo1.png" alt="alyuba" width="60" height="30"> </h1>
        </div>
        <button class="menu-button"> <img src="img/menu.png" alt="menu" width="20" height="20"> </button>
        <nav>
            <ul>
                <li><a class="active" href="#home">HOME</a></li>
                <li><a href="#about-me">ABOUT</a></li>
                <li><a href="#servises">SERVICES</a></li>
                <li><a href="#tasks">PROJECTS</a></li>
                <li><a href="#blogs">BLOGS</a></li>
                <li><a href="#contact-me">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div id="colun">
           <div id="imge">
                <img src="img/alyuba1.png" alt="alyuba" width="600" height="600">
            </div>
            <div id="aa">
                <p id="para">Hi, my name is</p>
                <h1>ALYUBA CORNELIUS</h1>
                <h2>I build things for the web</h2>
                <p style="color: antiquewhite;">I am a Software Engineer in Kenya. I build modern web applications with the latest technologies, mostly React.js, Bootstrap, and Node.js.</p>
                <!--<button type="submit">MY CV</button>-->
                
                <?php
$pdfFilePath = 'doc/chumbacv.pdf';

if (file_exists($pdfFilePath)) {
    echo '<form method="get" action="' . $pdfFilePath . '">';
    echo '<button type="submit">MY CV</button>';
    echo '</form>';

  
    //echo '<a href="' . $pdfFilePath . '" target="_blank"><button type="button">MY CV</button></a>'; //Added type="button"
} else {
    echo 'CV PDF file not found.';
}
?>
<?php
$emailAddress = 'chums245@gmail.com'; 

echo '<form>';
echo '<button type="submit" formaction="mailto:' . $emailAddress . '">CONTACT ME</button>';
echo '</form>';
?>


            </div>
        </div>
    </div>
    <section id="about-me" class="section">
        <h2>About Me</h2>
        <p>
           A dedicated and results-driven ICT professional with a strong foundation in IT support, network 
administration, system analysis, and graphic design. With hands-on experience in providing 
comprehensive IT solutions, I excel in managing hardware, software, and network systems, 
ensuring smooth operations for both staff and clients. My expertise spans across front-end web 
development HTML, CSS, JavaScript), backend development PHP, XAMPP, database 
administration, and system maintenance. Additionally, I bring a creative touch to my work as a 
graphic designer, having created impactful branding materials and logos for various clients. With 
a strong emphasis on time management, excellent problem-solving abilities, and a passion for 
continuous learning, I thrive in dynamic environments and am highly adaptable to new 
technologies. I am a self-motivated professional with a commitment to delivering high-quality 
results while working effectively both independently and as part of a team. 
        </p>
        <h3>My History</h3>
        <p>
            My journey in the world of technology began in 2020.
            Over the years, I have had the opportunity to work on a variety of projects,
            ranging from web projects to mobile applications.
            These experiences have shaped my skills in web development, database management, and data science.
            I am passionate about staying up-to-date with the latest advancements in the field,
            and I am always eager to take on new challenges.
        </p>
    </section>

    <div id="servises">
        <h1>MY SERVICES</h1>
        <ul>
            <li>
                <a href="#">
                    <img src="icon/web.png" width="50" height="50" alt="Web Development">
                    <br>
                    Web Development
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/database.png" width="50" height="50" alt="Database Management">
                    <br>
                    Database Management
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/desktop.png" width="50" height="50" alt="Desktop Applications">
                    <br>
                    Desktop Applications
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/data.png" width="50" height="50" alt="Data Science">
                    <br>
                    Data Science
                </a>
            </li>
        </ul>
    </div>
   <!-- <div class="container">
        <div class="block1">
            <a href="">
                <img src="icon/web.png" alt="Web Development">
                <br>
                Web Development
            </a>
        </div>
        <div class="block2">
            <a href="">
                <img src="icon/database.png" alt="Database Management">
                <br>
                Database Management
            </a>
        </div>
        <div class="block3">
            <a href="">
                <img src="icon/desktop.png" alt="Desktop Applications">
                <br>
                Desktop Applications
            </a>
        </div>
        <div class="block4">
            <a href="">
                <img src="icon/data.png" alt="Data Science">
                <br>
                Data Science
            </a>
        </div>
    </div>-->

    <section id="tasks" class="section">
        <h2>Completed PROJECTS</h2>
        <div class="project-post">
            <h3> Website Redesign</h3>
            <p class="date">Completed: January 15, 2024</p>
            <p>Redesigned the company website for improved user experience and performance.</p>
        </div>
        <div class="project-post">
            <h3> Database Optimization</h3>
            <p class="date">Completed: February 20, 2024</p>
            <p>Optimized the database queries and structure, resulting in a 30% increase in speed.</p>
        </div>
        <div class="project-post">
            <h3> Mobile App Development</h3>
            <p class="date">Completed: March 10, 2024</p>
            <p>Developed a mobile application for  Android to enhance customer engagement.</p>
        </div>
    </section>

    <div id="blogs">
        <h2>My Blogs</h2>
        <div class="blog-post">
            <h3>Blog: univerity life in kenya </h3>
            <p class="date">January 1, 2024</p>
            <p>This is a brief summary of the first blog post.  .</p>
            <a href="#">Read More</a>
        </div>
        <div class="blog-post">
            <h3>Blog: drugs and study</h3>
            <p class="date">February 15, 2024</p>
            <p>Here's another blog post excerpt.</p>
            <a href="#">Read More</a>
        </div>
        </div>

    <section id="contact-me" class="section">
        <h2>Contact Me</h2>
        <p>
            Feel free to reach out to me for any inquiries or collaboration opportunities.
        </p>
        <form id="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
        <div id="email-status" style="margin-top: 1rem; font-weight: bold;"></div>
    </section>

    <footer>
        copyright &copy; alyuba2025
    </footer>
    <script>
        const sections = document.querySelectorAll('.section');

        function revealSections() {
            sections.forEach((section, index) => {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                setTimeout(() => {
                    if (sectionTop < windowHeight * 0.8) {
                        section.classList.add('show');
                    }
                }, index * 200);
            });
        }

        window.addEventListener('scroll', revealSections);
        revealSections();

        document.getElementById('contact-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            const form = this;
            const formData = new FormData(form);
            const emailStatus = document.getElementById('email-status');

            emailStatus.textContent = 'Sending...'; // Set sending message

            // Simulate an asynchronous operation (e.g., sending an email)
            fetch('/send-email', {  //  Endpoint
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    return response.text(); // Or response.json(), 
                } else {
                    throw new Error('Failed to send email.');
                }
            })
            .then(data => {
                emailStatus.textContent = 'Email sent successfully!';
                form.reset(); // Clear the form
            })
            .catch(error => {
                console.error('Error:', error);
                emailStatus.textContent = 'Failed to send email.';
            });
        });
    </script>
<script type="text/javascript">
    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
 if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
 backToTopButton.style.display = "block";
 } else {
 backToTopButton.style.display = "none";
}
 };

 // When the user clicks on the button, scroll to the top of the document
 backToTopButton.onclick = function() {
 document.body.scrollTop = 0; // For Safari
 document.documentElement.scrollTop = 0; 
 };
</script>
<script type="text/javascript">
        const menuButton = document.querySelector('.menu-button');
        const nav = document.querySelector('nav');

        menuButton.addEventListener('click', () => {
            nav.classList.toggle('show');
        });
    
</script>
</body>
</html>