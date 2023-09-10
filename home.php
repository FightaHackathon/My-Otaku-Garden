<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href = "stylesajax.css">
    <link rel="icon" href="image/My project.png" sizes="50">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&family=Roboto&display=swap');
        .larger-text {
            font-size: 20px;
        }
    </style>
    <script>
        // JavaScript code for hiding the preloader once the page is fully loaded
        window.addEventListener('load', function () {
          const preloader = document.querySelector('.preloader');
          preloader.style.display = 'none';
        });
      </script>
</head>
<body>
    <div class="preloader">
        <img src="image/Preloader.gif" alt="Loading...">
    </div>
    
    <div id="wrapper">
        <!-- Nav Section -->
        <div class="head">
            <ul class="nav">
                <li><a href="#wrapper">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#Anime">Anime</a></li>
                <li>
                    <a href="#manga">Manga</a>
                </li>
                <li><a href="figshop.html">Collectibles</a></li>
                <li class="button">
                    <button class="glow-on-hover" type="button"><a href="Form/form.php">Login or SignUp!</a></button>
                </li>
                <li class="button">
                    <button class="glow-on-hover" type="button" onclick="logout()">Log Out!</button>
                    <script>
                        function logout() {
                            // Display a confirmation dialog
                            const confirmLogout = confirm("Are you sure you want to logout?");
                            
                            if (confirmLogout) {
                                // Create a new XMLHttpRequest object
                                const xhr = new XMLHttpRequest();
                                
                                // Define the request method, URL, and whether it's asynchronous (true)
                                xhr.open("POST", "logout.php", true);
                                
                                // Set the request header (for a POST request)
                                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                                
                                // Define what to do when the request is complete
                                xhr.onload = function () {
                                    if (xhr.status === 200) {
                                        // Handle the response from logout.php here
                                        const response = xhr.responseText;
                                        alert(response); // Display the response as an alert
                                    }
                                };
                                
                                // Send the request
                                xhr.send();
                            } else {
                                // User canceled, do nothing
                            }
                        }
                    </script>
                </li>
                <div class="search-container">
                    <input type="text" id="search-bar" placeholder="Search...">
                    <button id="search-button"><i class="fa fa-search"></i></button>
                </div>
            </ul>
        </div>
    </div>
    
        </div>
        
        <!-- Head Section -->
        <div class="intro">
            <div>
                <p id="intro_text">Welcome to our <br> <b>"OTAKU Garden"</b> <br> </p>
                <img src="image/My project.png" alt="logo" class="logo">
            </div>
        </div>


<!-- About section -->
        <div id="about">
            <div class="textboxes">
                <div class="left_img">
                    <img src="image/naruto-37609.png" alt="">
                </div>
                <div id="reflect_box">
                    <p id="textbox">
                        <b class="larger-text">My Otaku Garden: Anime and Figure Review & Ordering Site</b><br> 
                        Welcome to My Otaku Garden, your one-stop destination for all things anime and figure-related! At My Otaku Garden, we bring you a curated world of Japanese pop culture, offering comprehensive reviews of your favorite anime series and intricate figures that adorn your shelves. Immerse yourself in the vibrant world of otaku fandom as we combine insightful analysis with seamless ordering, creating an experience tailored to every anime enthusiast.
                    </p>
                </div>
                <div class="right_img">
                    <img src="image/luffy_one_piece1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <section class="about-section">
        <div class="content">
            <div class="item">
                <div class="image-container">
                    <img src="image/cart-removebg-preview.png" alt="" class="about-image">
                </div>
                <div class="text-container">
                    <div class="about-text">
                        <h2>Seamless Ordering</h2>
                        <p>Found a figure or anime series that captures your heart? My Otaku Garden ensures a hassle-free ordering process. With a user-friendly interface and secure payment options, you can easily place your orders and have your favorite merchandise delivered straight to your doorstep. We collaborate with trusted suppliers and distributors to guarantee authenticity and top-notch quality for every purchase.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="image/community-removebg-preview.png" alt="" class="about-image">
                </div>
                <div class="text-container">
                    <div class="about-text">
                        <h2>Community Engagement</h2>
                        <p>Beyond reviews and ordering, My Otaku Garden thrives on fostering a vibrant community of anime enthusiasts. Engage in discussions, share your thoughts, and connect with fellow fans who share your passion. Participate in contests, polls, and interactive events to showcase your love for anime and figures.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image-container">
                    <img src="image/handshake.png" alt="" class="about-image">
                </div>
                <div class="text-container">
                    <div class="about-text">
                        <h2>Immerse Yourself</h2>
                        <p>At My Otaku Garden, we're dedicated to creating an immersive experience that celebrates the richness of anime culture. Whether you're seeking insightful reviews, high-quality figures, or a supportive community, we invite you to explore our virtual garden and cultivate your otaku spirit. Join us in celebrating the artistry, storytelling, and creativity that define the world of anime and figures. Your journey awaits - step into My Otaku Garden today!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <hr>
    <div class="footer">
        <p>&copy; 2023 My Otaku Garden. All rights reserved.</p>
    </div>
    </body>
    </html>
    