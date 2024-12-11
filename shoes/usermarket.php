<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

require('connect.php');

// Tangani tombol "Add To Cart"
if (isset($_POST['cart'])) {
    $id = $_POST['id'];
    
    // Ambil data dari tabel produk berdasarkan ID
    $queryProduct = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
    $productData = mysqli_fetch_assoc($queryProduct);

    if ($productData) {
        // Masukkan data ke tabel cart
        $insertCart = mysqli_query($conn, "INSERT INTO cart (title, price, descript, nama) VALUES (
            '{$productData['title']}',
            '{$productData['price']}',
            '{$productData['descript']}',
            '{$productData['nama']}'
        )");

        if ($insertCart) {
            echo "<script>alert('Produk berhasil ditambahkan ke keranjang!');</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan saat menambahkan ke keranjang.');</script>";
        }
    } else {
        echo "<script>alert('Produk tidak ditemukan.');</script>";
    }
}

// Query ulang untuk menampilkan data produk
$query = mysqli_query($conn, "SELECT * FROM products");
$i = 1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="css/usermarket.css">
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
    background-color: #f4f4f4;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

/* Navbar Styling */
nav {
    width: 100%;
    background-color: #343a40;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    position: sticky;
    top: 0;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

nav a {
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: 500;
    border: 2px solid transparent;
    border-radius: 20px;
    transition: 0.3s ease-in-out;
}

nav a:hover {
    background-color: #ffffff;
    color: #343a40;
    border: 2px solid #343a40;
}

nav h1 {
    font-size: 1.5rem;
    font-weight: bold;
    margin: 0;
}

nav form button {
    padding: 10px 20px;
    color: white;
    background-color: #6c757d;
    border: none;
    border-radius: 20px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

nav form button:hover {
    background-color: #ffffff;
    color: #6c757d;
    box-shadow: 0 0 5px 1px #ccc;
}

/* Section Styling */
section.user {
    width: 90%;
    margin-top: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    background-color: #ffffff;
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
    background-color: #495057;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-align: left;
    border-bottom: 2px solid #dee2e6;
}

tbody tr td {
    padding: 15px;
    font-size: 14px;
    color: #495057;
    border-bottom: 1px solid #dee2e6;
}

tbody tr:nth-child(even) {
    background-color: #f8f9fa;
}

tbody td form button {
    padding: 8px 15px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

tbody td form button:hover {
    background-color: #218838;
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
        <a href="cart.php">My Cart</a>
        <h1>WELCOME TO MYSHOES</h1>
        <form action="auth/logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
    </nav>
    <section class="user">
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
                <?php while ($baris = mysqli_fetch_assoc($query)) { ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $baris['title']; ?></td>
                    <td><?php echo $baris['price']; ?></td>
                    <td><?php echo $baris['descript']; ?></td>
                    <td><?php echo $baris['nama']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $baris['id']; ?>">
                            <button type="submit" name="cart">Add To Cart</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </section>
</body>
</html>