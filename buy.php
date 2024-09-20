<?php
include('koneksi.php');

// Ambil ID produk dari parameter URL
$product_id = isset($_GET['product_id']) ? intval($_GET['product_id']) : 0;

// Query untuk mendapatkan detail produk
$sql = "SELECT * FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $product_id);
$stmt->execute();
$result = $stmt->get_result();

// Periksa apakah produk ditemukan
if ($result->num_rows === 0) {
    die("Product not found.");
}

$product = $result->fetch_assoc();

// Tutup koneksi
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <style>
        .content {
            padding: 2rem;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <main class="content">
            <h2>Buy Product</h2>
            <form action="process_purchase.php" method="POST">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">
                
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" max="<?php echo htmlspecialchars($product['stock']); ?>" required>
                </div>

                <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
        </main>
    </div>

    <footer class="footer">
        <p>&copy; Copyright By Fadly.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
