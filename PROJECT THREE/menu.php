<!DOCTYPE html>
<html>

<head>
    <title>Menu</title>

    <style>
    /* RESET */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('pexels-macourt-media-1519726-32941658.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    /* HEADER (same as about page) */
    .header {
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 10;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #1E90FF;
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

    /* MENU SECTION */
    .menu-section {
        padding-top: 120px;
        text-align: center;
    }

    .menu-section h1 {
        font-size: 40px;
        margin-bottom: 20px;
    }

    /* TABLE DESIGN */
    table {
        width: 80%;
        margin: 30px auto;
        border-collapse: collapse;
        background: white;
        color: black;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.4);
    }

    /* HEADER ROW */
    th {
        background: #1E90FF;
        color: white;
        padding: 15px;
        font-size: 18px;
    }

    /* TABLE CELLS */
    td {
        padding: 15px;
        font-size: 16px;
    }

    /* STRIPED ROWS */
    tr:nth-child(even) {
        background: #f2f2f2;
    }

    /* HOVER EFFECT */
    tr:hover {
        background: #cce7ff;
        transition: 0.3s;
        cursor: pointer;
    }

    /* FOOTER */
    .footer {
        background: #2c3e50;
        color: white;
        text-align: center;
        padding: 60px;
        margin-top: 50px;
    }
    </style>

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div class="logo">Urban Nest Hotel</div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="gallery.php">Gallery</a>
            <a href="loginorder.php">Order</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <!-- MENU CONTENT -->
    <div class="menu-section">
        <h1>Our Menu</h1>

        <table>
            <tr>
                <th>Food</th>
                <th>Price</th>
            </tr>

            <tr>
                <td>Fish</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Chicken</td>
                <td>$8</td>
            </tr>
            <tr>
                <td>Burger</td>
                <td>$6</td>
            </tr>
            <tr>
                <td>Fresh Juice</td>
                <td>$3</td>
            </tr>
            <tr>
                <td>Soda</td>
                <td>$2</td>
            </tr>

        </table>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: ubnest123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 urban nest Hotel. All rights reserved.</p>
    </div>

</body>

</html>