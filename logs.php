<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Logs - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<body id="page-top">
    <div id="wrapper">
    <?php
            include_once 'functions/authentication.php';
            include_once 'functions/sidebar.php';
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><span>KYLE SHOE'S SHOP POINT OF SALE AND INVENTORY MANAGEMENT SYSTEM</span></div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">System Logs</h3>
                </div>
               
                <div class="container py-4 py-xl-5">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Inventory</p>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Data ID</th>
                                            <th>User</th>
                                            <th>Product</th>
                                            <th>Stock In</th>
                                            <th>Stock Out</th>
                                            <th>Data Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  include_once 'functions/inventory-logs.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>

                <div class="container py-4 py-xl-5">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">User Log</p>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Data ID</th>
                                            <th>User</th>
                                            <th>Type</th>
                                            <th>Sign-In</th>
                                            <th>Sign-Out</th>
                                            <th>Data Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  include_once 'functions/user-logs.php'; ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Inventory &amp; Point of Sale System 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>