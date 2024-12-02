<?php
include "../koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MENU</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
<ul>
        <li><a href="../menu/index.php">data menu</a></li>
        <li><a href="../pelanggan/index.php">data pelanggan</a></li>     
</ul>
    <h2>Data Menu</h2>
    <!-- tampilkan notifikasi jika ada -->
    <?php if (isset($_SESSION['notifikasi'])): ?>
        <p><?php echo $_SESSION['notifikasi']; ?></p>
        <!-- Hapus notifikasi setelah ditampilkan -->
        <?php unset($_SESSION['notifikasi']); ?>
    <?php endif; ?>

    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th><a href="tambah_menu.php">Tambah Data Menu</a></th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        // Query untuk mendapatkan data dari table_menu
        $query = $db->query("SELECT * FROM table_menu");
        while ($mn = $query->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $mn['nama']; ?></td>
                <td><?php echo $mn['kategori']; ?></td>
                <td><?php echo $mn['harga']; ?></td>
                <td align="center">
                    <a href="edit_menu.php?menu_id=<?php echo $mn['menu_id']; ?>">Edit</a> |
                    <a onclick="return confirm('Anda yakin ingin menghapus data?')" href="hapus_menu.php?menu_id=<?php echo $mn['menu_id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <!-- menghitung jumlah baris -->
    <p>Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>
