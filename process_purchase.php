<?php
include('koneksi.php');

// Ambil data dari form
$product_id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

// Periksa apakah data valid
if ($product_id <= 0 || $quantity <= 0) {
    die("Invalid product or     .");
}

// Query untuk update stok produk
$sql = "UPDATE products SET stock = stock - ? WHERE id = ? AND stock >= ?";
$stmt = $conn->prepare($sql);

// Periksa apakah perintah SQL berhasil disiapkan
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param('iii', $quantity, $id, $quantity);
$stmt->execute();

// Periksa apakah ada perubahan pada stok
if ($stmt->affected_rows === 0) {
    die("Product not found or insufficient stock.");
}

// Query untuk memasukkan data ke tabel orders
$sql_insert = "INSERT INTO orders (product_id, quantity, order_date) VALUES (?, ?, NOW())";
$stmt_insert = $conn->prepare($sql_insert);

if ($stmt_insert === false) {
    die("Error preparing insert statement: " . $conn->error);
}

$stmt_insert->bind_param('ii', $id, $quantity);
$stmt_insert->execute();

// Tutup pernyataan dan koneksi
$stmt->close();
$stmt_insert->close();
$conn->close();

echo "Purchase successful!";
?>
