<?php include 'db.php'; ?>

<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$menu=$_POST['menu'];
$address=$_POST['address'];
$date=$_POST['date'];

$conn->query("INSERT INTO orders VALUES(null,'$name','$email','$phone','$menu','$address','$date')");
echo "<p style='color:lime;text-align:center;'>Order Saved!</p>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order</title>

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

    /* HEADER */
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

    /* FORM CONTAINER */
    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        padding-top: 120px;
        padding-bottom: 50px;
    }

    /* FORM DESIGN */
    form {
        background: white;
        color: black;
        padding: 30px;
        width: 400px;
        border-radius: 15px;
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.5);
    }

    form h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #1E90FF;
    }

    input,
    select {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 15px;
    }

    input:focus,
    select:focus {
        outline: none;
        border: 1px solid #1E90FF;
    }

    /* BUTTON */
    button {
        width: 100%;
        padding: 12px;
        background: #1E90FF;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background: #0d6efd;
    }

    /* FOOTER */
    .footer {
        background: #2c3e50;
        color: white;
        text-align: center;
        padding: 20px;
    }
    </style>

</head>

<body>

    <!-- HEADER -->
    <div class="header">
        <div>Urban Nest Hotel</div>
        <div class="nav">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="menu.php">Menu</a>
            <a href="gallery.php">Gallery</a>
            <a href="order.php">Order</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <!-- FORM -->
    <div class="form-container">
        <form method="POST">
            <h2>Order Your Meal</h2>

            <input type="text" name="name" placeholder="Full Name" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="text" name="phone" placeholder="Phone Number" required>

            <select name="menu" required>
                <option value="">Select Menu</option>
                <option>Fish</option>
                <option>Chicken</option>
                <option>Burger</option>
                <option>Fresh Juice</option>
                <option>Soda</option>
            </select>

            <input type="text" name="address" placeholder="Delivery Address" required>

            <input type="date" name="date" required>

            <button name="submit">Place Order</button>

        </form>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <p>Contact: +250 788354678 | Email: ubnest123@gmail.com</p>
        <p>Follow us: Facebook | Instagram | Twitter</p>
        <p>© 2026 Urban Nest Hotel. All rights reserved.</p>
    </div>

</body>

</html>