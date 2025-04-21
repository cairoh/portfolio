<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alyuba Cornelius</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* --- Reset Styles (Optional, but Recommended) --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: #333;
            background-color: #f0f0f0;
        }

        a {
            text-decoration: none;
            color: #0078d7;
        }

        a:hover {
            color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        /* --- Reusable Components --- */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 1rem;
        }

        /* --- Header Section --- */
        #logo {
            background-color: #34495e;
            padding: 1rem 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #logo h1 {
            color: #fff;
            font-size: 2rem;
            margin-left: 20px;
        }

        #head ul {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        #head ul li {
            margin: 0 1.5rem;
        }

        #head ul li a {
            color: #fff;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        #head ul li a:hover,
        #head ul li a.active {
            color: #00bcd4;
        }

        #head ul li a.active {
            border-bottom: 2px solid #00bcd4;
            padding-bottom: 0.25rem;
        }

        /* --- Introduction Section --- */
        #colun {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            margin-top: 2rem;
            padding: 20px;
        }

        #imge {
            flex: 1;
            text-align: center;
            margin-bottom: 2rem;
        }

        #imge img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        #aa {
            flex: 1;
            padding: 1rem;
        }

        #para {
            color: #6c757d;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 3rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        h2 {
            font-size: 2rem;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        #aa p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #eee;
        }

        #aa button {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            margin-right: 1rem;
            background-color: #0078d7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #aa button:hover {
            background-color: #0056b3;
        }

        /* --- Services Section --- */
        #servises {
            text-align: center;
            margin-top: 4rem;
        }

        #servises h1 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #2c3e50;
        }

        #servises ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 2rem;
        }

        #servises ul li {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #servises ul li:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        #servises ul li img {
            width: 50px;
            height: 50px;
            margin-bottom: 1rem;
        }

        /* --- Grid Layout (Alternative Services) --- */
        .container {
            margin-top: 4rem;
        }

        .container .block1,
        .container .block2,
        .container .block3,
        .container .block4 {
            background-color: #fff;
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .container .block1:hover,
        .container .block2:hover,
        .container .block3:hover,
        .container .block4:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
            padding: 20px;
        }

        .container div img {
            width: 500px;
            height: 500px;
            margin-bottom: 1rem;
        }

        /* --- Footer --- */
        footer {
            background-color: #2c3e50;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 4rem;
        }

        /* --- Blog Section --- */
        #blogs {
            padding: 2em 0;
            margin-top: 4rem;
        }

        #blogs h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 1rem;
        }

        .blog-post {
            background-color: #fff;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.2);
        }

        .blog-post h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #0078d7;
        }

        .blog-post p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }

        .blog-post .date {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 1rem;
        }

        /* --- About Section --- */
        #about-me {
            padding: 2em;
            margin-bottom: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            opacity: 0;
        }

        #about-me.show {
            opacity: 1;
        }

        #about-me:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        #about-me h2 {
            font-size: 2em;
            color: #4CAF50;
            margin-bottom: 1em;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.5em;
        }

        #about-me p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1em;
        }

        /* --- Projects Section --- */
        #projects {
            padding: 2em 0;
            margin-top: 4rem;
        }

        #projects h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            color: #2c3e50;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 1rem;
        }

        .project-post {
            background-color: #fff;
            padding: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .project-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .project-post h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #0078d7;
        }

        .project-post p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
        }

        .project-post .date {
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 1rem;
        }

        /* --- Contact Section --- */
        #contact-me {
            padding: 2em;
            margin-bottom: 30px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            opacity: 0;
        }

        #contact-me.show {
            opacity: 1;
        }

        #contact-me:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        #contact-me h2 {
            font-size: 2em;
            color: #4CAF50;
            margin-bottom: 1em;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 0.5em;
        }

        #contact-me p {
            font-size: 1.1rem;
            line-height: 1.7;
            color: #555;
            margin-bottom: 1em;
        }

        #contact-me form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        #contact-me label {
            font-weight: 600;
            color: #333;
        }

        #contact-me input,
        #contact-me textarea {
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        #contact-me textarea {
            resize: vertical;
        }

        #contact-me button[type="submit"] {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            background-color: #0078d7;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: fit-content;
        }

        #contact-me button[type="submit"]:hover {
            background-color: #0056b3;
        }


        /* --- Responsive Adjustments --- */
        @media (max-width: 768px) {
            #head ul {
                flex-direction: column;
                text-align: center;
            }

            #head ul li {
                margin: 0.5rem 0;
            }

            #colun {
                flex-direction: column;
            }

            #aa {
                width: 100%;
            }

            #imge {
                width: 100%;
            }

            .container {
                grid-template-columns: 1fr;
            }

            #servises ul li {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 1.5rem;
            }

            #aa button {
                font-size: 0.9rem;
                padding: 0.75rem 1rem;
            }

            .container {
                padding: 0 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div id="logo">
            <h1>ALYUBA</h1>
            <div id="head">
                <ul>
                    <li><a class="active" href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#project">PROJECTS</a></li>
                     <li><a href="#tasks">TASKS</a></li>
                    <li><a href="#blogs">BLOGS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="colun">
            <div id="imge">
                <img src="../img/alyuba1.png" alt="alyuba" width="600" height="600">
            </div>
            <div id="aa">
                <p id="para">Hi, my name is</p>
                <h1>ALYUBA CORNELIUS</h1>
                <h2>I build things for the web</h2>
                <p>I am a Software Engineer in Kenya. I build modern web applications with the latest technologies, mostly React.js, Bootstrap, and Node.js.</p>
                <button>MY CV</button>
                <button>Contact Me</button>
            </div>
        </div>
    </div>

    <section id="about-me" class="section">
        <h2>About Me</h2>
        <p>
            I am a passionate IT professional with a strong background in web development.
            I have a proven track record of creating engaging user experiences and solving complex technical challenges.
        </p>
        <h3>My History</h3>
        <p>
            My journey in the world of technology began [Start of your IT Journey].
            Over the years, I have had the opportunity to work on a variety of projects,
            ranging from [Project Type 1] to [Project Type 2].
            These experiences have shaped my skills in [Skill 1], [Skill 2], and [Skill 3].
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
    <div class="container">
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
    </div>

    <section id="tasks" class="section">
        <h2>Completed Tasks</h2>
        <div class="project-post">
            <h3>Task 1: Website Redesign</h3>
            <p class="date">Completed: January 15, 2024</p>
            <p>Redesigned the company website for improved user experience and performance.</p>
        </div>
        <div class="project-post">
            <h3>Task 2: Database Optimization</h3>
            <p class="date">Completed: February 20, 2024</p>
            <p>Optimized the database queries and structure, resulting in a 30% increase in speed.</p>
        </div>
        <div class="project-post">
            <h3>Task 3: Mobile App Development</h3>
            <p class="date">Completed: March 10, 2024</p>
            <p>Developed a mobile application for iOS and Android to enhance customer engagement.</p>
        </div>
    </section>

    <div id="blogs">
        <h2>My Blogs</h2>
        <div class="blog-post">
            <h3>Blog Post Title 1</h3>
            <p class="date">Published: January 1, 2024</p>
            <p>This is a brief summary of the first blog post.  It can talk about a recent project, a technical topic, or anything else you want to share.</p>
            <a href="#">Read More</a>
        </div>
        <div class="blog-post">
            <h3>Blog Post Title 2</h3>
            <p class="date">Published: February 15, 2024</p>
            <p>Here's another blog post excerpt.  You might discuss a new technology, a problem you solved, or lessons you've learned.</p>
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
</body>
</html>
