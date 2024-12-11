<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

if(!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

include('connect.php');
    
if(isset($_GET['submit'])) {
    $id = '';
    $title = $_GET['title'];
    $price = $_GET['price'];
    $description = $_GET['descript'];
    $sellerName = $_GET['nama'];

    $query = mysqli_query($conn, "INSERT INTO products(id, title, price, descript, nama) VALUES ('$id', '$title', '$price', '$description', '$sellerName')");

    if($query) {
        header('location: adminmarket.php');
    };
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Product</title>
    <link rel="stylesheet" href="css/create.css">
    <style>
        /* Gaya untuk body */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #1e3c72, #2a5298); /* Gradasi biru elegan */
    color: #fff;
    box-sizing: border-box;
}

/* Gaya untuk navigasi */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: linear-gradient(90deg, #2a5298, #1e3c72); /* Gradasi horizontal */
    color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-bottom: 3px solid rgba(255, 255, 255, 0.2);
}

nav h1 {
    font-size: 24px;
    font-weight: bold;
    margin: 0;
}

nav a {
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    border: 2px solid white;
    border-radius: 30px;
    transition: all 0.3s ease-in-out;
    background: transparent;
}

nav a:hover {
    color: #1e3c72;
    background: white;
}

/* Gaya untuk form */
section.create {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    padding: 20px;
}

form {
    background: linear-gradient(135deg, #2a5298, #1e3c72); /* Gradasi diagonal */
    border-radius: 10px;
    padding: 30px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.3);
}

form .inp {
    margin-bottom: 15px;
}

form .inp label {
    display: block;
    margin-bottom: 5px;
    font-size: 1rem;
    font-weight: bold;
    color: white;
}

form .inp input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    background-color: rgba(255, 255, 255, 0.2);
    color: white;
}

form .inp input:focus {
    outline: none;
    background-color: rgba(255, 255, 255, 0.4);
}

form button {
    width: 100%;
    padding: 10px;
    background: white;
    color: #1e3c72;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

form button:hover {
    background: #1e3c72;
    color: white;
}

/* Gaya untuk responsivitas */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    nav a {
        margin-bottom: 10px;
    }

    form {
        width: 90%;
    }
}

    </style>
</head>
<body>
    <nav>
        <a href="adminmarket.php">All Products</a>
        <h1>MYSHOES.COM</h1>
        <a href="edit.php">Edit Product</a>
    </nav>
    <section class="create">
        <form action="create.php" method="get">
            <div class="inp">
                <label for="">Title :</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="inp">
                <label for="">Price :</label>
                <input type="number" name="price" id="price">
            </div>

            <div class="inp">
                <label for="">Description :</label>
                <input type="text" name="descript" id="descript">
            </div>    
            
            <div class="inp">
                <label for="">Seller Name :</label>
                <input type="text" name="nama" id="nama">
            </div>
            <button type="submit" name="submit">Add Product</button>
        </form>
    </section>
</body>
</html>