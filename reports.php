<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports</title>
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

        .report-card {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <h4>Menu</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="dashbord.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customers.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="reports.php">Reports</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-4 content">
                <h2>Reports</h2>
                <p>Here are the latest reports for your business activities:</p>

                <!-- Example Reports Cards -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card report-card">
                            <div class="card-body">
                                <h5 class="card-title">Sales Report</h5>
                                <p class="card-text">Presents detailed monthly sales reports, including total sales, number of orders, and revenue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card report-card">
                            <div class="card-body">
                                <h5 class="card-title">Inventory Report</h5>
                                <p class="card-text">This report provides an overview of sales performance, allowing analysis of revenue and number of orders.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card report-card">
                            <div class="card-body">
                                <h5 class="card-title">Customer Feedback Report</h5>
                                <p class="card-text">Providing dedicated customer service to assist with any of your questions and needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card report-card">
                            <div class="card-body">
                                <h5 class="card-title">Financial Summary</h5>
                                <p class="card-text">Overview of financial performance over the quarter.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; Copyright By Fadly.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
