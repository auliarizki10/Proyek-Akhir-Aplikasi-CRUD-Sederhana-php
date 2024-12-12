<?php 
session_start(); 
include "../koneksi.php"; 

// Mengambil id menu dari parameter URL
$id = $_GET['menu_id'];

// Mengambil data menu dari database berdasarkan id
$query = $db->query("SELECT * FROM table_menu WHERE menu_id = '$id'");
$menu = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Menu</title>
</head>
<body>
  <h3>Edit Data Menu</h3>  
   <form action="proses_edit.php" method="POST">
     <input type="hidden" name="menu_id" value="<?php echo $menu['menu_id']; ?>">
     <table border="0">
       <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $menu['nama']; ?>" required></td>
       </tr>
       <tr>
        <td>Kategori</td>
        <td>
            <select name="kategori" required>
                <option value="Menu spesial" <?php echo ($menu['kategori'] == 'Menu spesial') ? 'selected' : ''; ?>>Menu Spesial</option>
                <option value="Makanan" <?php echo ($menu['kategori'] == 'Makanan') ? 'selected' : ''; ?>>Makanan</option>
                <option value="Minuman" <?php echo ($menu['kategori'] == 'Minuman') ? 'selected' : ''; ?>>Minuman</option>
                <option value="Dessert" <?php echo ($menu['kategori'] == 'Dessert') ? 'selected' : ''; ?>>Dessert</option>
            </select>
        </td>
       </tr>
       <tr>
        <td>Harga</td>
        <td><input type="text" name="harga" value="<?php echo $menu['harga']; ?>" required></td>
       </tr>
     </table>   
      <button type="submit" name="simpan">Simpan</button>
   </form>
</body>
</html>
