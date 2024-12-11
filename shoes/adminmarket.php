<?php
session_start(); // -> Harus ditambahkan ketika menggunakan session

if(!isset($_SESSION['login'])) {
    header('location: auth/login.php');
    exit;
}

require('connect.php');
$query = mysqli_query($conn, 'SELECT * FROM products');
$i = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="css/adminmarket.css">
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
    width: 150px;
    padding: 10px 0;
    color: white;
    text-decoration: none;
    text-align: center;
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
    border: 2px solid white;
}

nav form {
    margin: 0;
}

nav form button {
    width: 150px;
    padding: 10px 0;
    color: white;
    background: transparent;
    border: 2px solid white;
    border-radius: 30px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

nav form button:hover {
    color: #1e3c72;
    background: white;
    box-shadow: 0px 0px 10px 1px white;
}

/* Gaya untuk tabel */
section.admin {
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: linear-gradient(135deg, #2a5298, #1e3c72); /* Gradasi diagonal */
    border-radius: 10px;
    overflow: hidden;
    color: white;
    margin-top: 20px;
}

table thead {
    background: rgba(255, 255, 255, 0.2);
}

table thead th {
    padding: 15px;
    font-size: 18px;
    text-align: center;
}

table tbody td {
    padding: 10px;
    text-align: center;
    font-size: 14px;
    background: rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 5px;
}

table tbody tr:hover {
    background: rgba(255, 255, 255, 0.2);
}

/* Gaya untuk tombol di tabel */
tbody td a,
tbody td button {
    display: inline-block;
    width: 100px;
    padding: 5px 0;
    text-decoration: none;
    color: white;
    border: 2px solid white;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    background: transparent;
    transition: all 0.3s ease-in-out;
}

tbody td a:hover,
tbody td button:hover {
    color: #1e3c72;
    background: white;
    border-color: white;
}

/* Gaya untuk responsivitas */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    nav a,
    nav form button {
        width: 100%;
        margin-bottom: 10px;
    }

    table thead th,
    table tbody td {
        font-size: 12px;
    }
}

    </style>
</head>
<body>
    <nav>
        <form action="auth/logout.php" method="post">
            <button type="submit">Log Out</button>
        </form>
        <h1>WELCOME BACK SIR</h1>
        <a href="create.php">Add Product</a>
    </nav>
    <section class="admin">
        <table border="1" cellpadding="3">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Seller Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
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
                        <a href="edit.php?id=<?php echo $baris['id']; ?>">Edit</a>
                    </td>
                    <td>
                        <form action="delete.php" method="post">
                            <!-- Input tidak telihat dan tidak bisa diubah, hanya untuk mengirim ID -->
                            <input readonly type="hidden" name="id" value="<?= $baris['id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </section>
</body>
</html>