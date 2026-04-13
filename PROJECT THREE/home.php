<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Home</title>

    <style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
    }

    /* HEADER */
    .header {
        position: absolute;
        width: 100%;
        top: 0;
        z-index: 10;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
       background:#1E90FF;
        color: white;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .nav a {
        color: white;
        margin: 10px;
        text-decoration: none;
        font-weight: bold;
        
    }

    .nav a:hover {
        color: yellow;
    }

    /* SLIDER */
    .slider {
        height: 100vh;
        position: relative;
    }

    .slide {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: 1s;
    }

    .active {
        opacity: 1;
    }

    /* TEXT OVERLAY */
    .overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }

    .overlay h1 {
        font-size: 50px;
    }

    .overlay p {
        font-size: 20px;
        margin: 10px 0;
    }

    .overlay button {
        padding: 10px 20px;
        border: none;
        background: orange;
        color: white;
        font-size: 18px;
        cursor: pointer;
    }

    /* BUTTONS */
    .controls {
        position: absolute;
        bottom: 20px;
        width: 100%;
        text-align: center;
    }

    .controls button {
        padding: 10px;
        margin: 5px;
        border: none;
        cursor: pointer;
    }

    /* FOOTER */
    .footer {
        background: #2c3e50;
        color: white;
        text-align: center;
        padding: 60px;
    }

    /* RESPONSIVE */
    @media(max-width:768px) {
        .overlay h1 {
            font-size: 30px;
        }
    }
    </style>
</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">
            <imgr src="Urban Nest Hotel logo design.png">Urban Nest Hotel
        </div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="gallery.php">Gallery</a>
            <a href="loginorder.php">Order</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <!-- SLIDER -->
    <div class="slider">

        <div class="slide active" style="background-image:url('pexels-macourt-media-1519726-32941658.jpg')"></div>
        <div class="slide" style="background-image:url('dan-gold-uhCgfivFP6o-unsplash.jpg')"></div>
        <div class="slide" style="background-image:url('pexels-westernhotel-4873342.jpg')"></div>
        <div class="slide" style="background-image:url('vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg')"></div>
        <div class="slide" style="background-image:url('pexels-cottonbro-6466281.jpg')"></div>
        <div class="slide" style="background-image:url('point3d-commercial-imaging-ltd-oxeCZrodz78-unsplash.jpg')">
        </div>

        <!-- TEXT -->
        <div class="overlay">
            <h1>Welcome to Our Hotel</h1>
            <p>Enjoy delicious food and drinks</p>
            <button onclick="goToOrder()">Order Now</button>
        </div>

        <!-- CONTROLS -->
        <!--<div class="controls">
        <button onclick="prevSlide()">Prev</button>
        <button onclick="nextSlide()">Next</button>
    </div>-->

    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: ubnest123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 urban nest Hotel. All rights reserved.</p>
    </div>

    <script>
    let slides = document.querySelectorAll('.slide');
    let index = 0;

    function showSlide(i) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[i].classList.add('active');
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    function prevSlide() {
        index = (index - 1 + slides.length) % slides.length;
        showSlide(index);
    }

    // AUTO SLIDE
    setInterval(nextSlide, 4000);

    function goToOrder() {
        window.location.href = 'loginorder.php';
    }
    </script>

</body>

</html>