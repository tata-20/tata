<?php
include "koneksi.php";
// Periksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Membuat query untuk mengambil data dari tabel (ganti 'nama_tabel' dengan nama tabel yang sesuai)
$query = "SELECT * FROM testimoni";
$result = mysqli_query($koneksi, $query);

// Mulai membuat tabel HTML
echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nama</th><th>Email</th></tr>";

// Menampilkan data dari hasil query
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Tutup koneksi ke database
mysqli_close($koneksi);
?>
