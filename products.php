<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <style>
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            padding: 1rem;
        }

        .sidebar a {
            text-decoration: none;
            color: #333;
        }

        .sidebar a:hover {
            color: #007bff;
        }

        .content {
            padding: 2rem;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 1rem;
            text-align: center;
        }

        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dasbord.php">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="dasbord.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="orders.php">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
            </ul>
            <form class="d-flex logout-btn" action="logout.php" method="POST">
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            <main class="col-md-9 ms-sm-auto col-lg-10 px-4 content">
                <h2>Products</h2>
                <p>Here is the list of all products:</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>123</td>
                            <td>KURSI ERGONOMIS</td>
                            <td>$09</td>
                            <td>84</td>
                            <td>Perabot</td>
                            <td><img src="img/produk2.jpeg" class="product-img" alt="Product A Image"></td>
                            <td><a href="buy.php?product_id=123" class="btn btn-success">Buy</a></td>
                        </tr>
                        <tr>
                            <td>236</td>
                            <td>CPU RGB HIGH PERFORMANCE</td>
                            <td>$95</td>
                            <td>50</td>
                            <td>Electronics</td>
                            <td><img src="img/Produk1.jpg" class="product-img" alt="Product B Image"></td>
                            <td><a href="buy.php?product_id=236" class="btn btn-success">Buy</a></td>
                        </tr>
                        <tr>
                            <td>745</td>
                            <td>HEATSETS OF 2024 PC</td>
                            <td>$70</td>
                            <td>20</td>
                            <td>Electronics</td>
                            <td><img src="img/Produk3.jpeg" class="product-img" alt="Product C Image"></td>
                            <td><a href="buy.php" class="btn btn-success">Buy</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; Copyright By Fadly.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
