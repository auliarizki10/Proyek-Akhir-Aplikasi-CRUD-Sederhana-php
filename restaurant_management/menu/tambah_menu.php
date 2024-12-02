<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Menu</title>
</head>
<body>
    <h3>Tambah Data Menu</h3>

    <form action="proses_tambah.php" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Menu spesial">Menu Spesial</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga" required></td>
            </tr>
        </table>
        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
