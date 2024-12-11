<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

if(!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

include('connect.php');

$id = $_GET['id'];

$queryData = "SELECT * FROM products WHERE id = '$id'";

$result = mysqli_query($conn, $queryData);

while($loop = mysqli_fetch_assoc($result)) {
    $data = $loop;
}

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['descript'];
    $sellerName = $_POST['nama'];

    $result = mysqli_query($conn, "UPDATE products SET title='$title', price='$price', descript='$description', nama='$sellerName' WHERE id=$id");

    if($result) {
        echo "<script>
            alert ('Data Berhasil Di Update')
            document.location.href='adminmarket.php'
        </script>";
    } else {
    echo "<script>
            alert('Data Gagal Di Update')
        </script>";
    }   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit your Product</title>
    <link rel="stylesheet" href="css/edit.css">
    <style>
      /* Gaya untuk body */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #28313B, #485461); /* Gradasi abu-abu elegan */
    color: #fff;
    box-sizing: border-box;
}

/* Gaya untuk navigasi */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background: linear-gradient(90deg, #28313B, #485461); /* Gradasi horizontal */
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
    color: #28313B;
    background: white;
}

/* Gaya untuk form */
section.edit {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    padding: 20px;
}

form {
    background: linear-gradient(135deg, #485461, #28313B); /* Gradasi diagonal */
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
    color: #28313B;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

form button:hover {
    background: #28313B;
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
        <a href="adminmarket.php">Home</a>
        <h1>MYSHOES.COM</h1>
        <a href="create.php">Add Product</a>
    </nav>
    <section class="edit">
        <form action="" method="post">
            <div class="inp">
                <label for="">Title :</label>
                <input type="text" name="title" id="title" value=<?= $data['title']?>>
            </div>

            <div class="inp">
                <label for="">Price :</label>
                <input type="number" name="price" id="price" value=<?= $data['price']?>>
            </div>

            <div class="inp">
                <label for="">Description :</label>
                <input type="text" name="descript" id="descript" value=<?= $data['descript']?>>
            </div>    
            
            <div class="inp">
                <label for="">Seller Name :</label>
                <input type="text" name="nama" id="nama" value=<?= $data['nama']?>>
            </div>
            <button type="submit" name="submit">Edit Product</button>
        </form>
    </section>
</body>
</html>