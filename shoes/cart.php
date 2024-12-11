<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

require('connect.php');

$cart = mysqli_query($conn, "SELECT * FROM cart");
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="css/cart.css">
    <style>
   /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #2c2c2c, #444);
    color: #eaeaea;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

/* Navbar Styling */
nav {
    width: 100%;
    background: linear-gradient(90deg, #1c1c1c, #3b3b3b);
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    position: sticky;
    top: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

nav a {
    text-decoration: none;
    color: #eaeaea;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 500;
    border: 2px solid transparent;
    border-radius: 20px;
    transition: 0.3s ease-in-out;
}

nav a:hover {
    background-color: #eaeaea;
    color: #1c1c1c;
    border: 2px solid #1c1c1c;
}

nav h1 {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
}

nav form button {
    padding: 10px 20px;
    color: #eaeaea;
    background-color: #565656;
    border: none;
    border-radius: 20px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

nav form button:hover {
    background-color: #eaeaea;
    color: #565656;
    box-shadow: 0 0 5px 1px #ccc;
}

/* Section Styling */
section.cart {
    width: 90%;
    margin-top: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    background: linear-gradient(135deg, #3b3b3b, #565656);
    padding: 20px;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

thead tr th {
    padding: 15px;
    background-color: #2c2c2c;
    color: #eaeaea;
    font-size: 16px;
    font-weight: bold;
    text-align: left;
    border-bottom: 2px solid #444;
}

tbody tr td {
    padding: 15px;
    font-size: 14px;
    color: #eaeaea;
    border-bottom: 1px solid #444;
}

tbody tr:nth-child(even) {
    background-color: #3b3b3b;
}

tbody td form button {
    padding: 8px 15px;
    background-color: #444;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

tbody td form button:hover {
    background-color: #565656;
}

/* Responsive Design */
@media (max-width: 768px) {
    nav h1 {
        font-size: 1.2rem;
    }

    table {
        font-size: 12px;
    }

    thead tr th, tbody tr td {
        font-size: 14px;
        padding: 10px;
    }

    tbody td form button {
        padding: 6px 10px;
        font-size: 12px;
    }
}


    </style>
</head>
<body>
    <nav>
        <a href="usermarket.php">Home</a>
        <h1>My Cart</h1>
        <form action="auth/logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </nav>
    <section class="cart">
        <table border="1" cellpadding="3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Seller Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($lined = mysqli_fetch_assoc($cart)) { ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $lined['title']; ?></td>
                    <td><?php echo $lined['price']; ?></td>
                    <td><?php echo $lined['descript']; ?></td>
                    <td><?php echo $lined['nama']; ?></td>
                    <td>
                        <form action="deletecart.php" method="post">
                            <input type="hidden" name="id" value="<?= $lined['id']; ?>">
                            <button type="submit" name="cart">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </section>
</body>
</html>