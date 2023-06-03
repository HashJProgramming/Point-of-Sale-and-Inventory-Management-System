<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inventory - Point of Sale and Inventory Management System</title>
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
                    <h3 class="text-dark mb-4">Inventory Management</h3>
                    <div class="row">
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                    <?php
                                            // Connect to the database.
                                            $db = new PDO('mysql:host=localhost;dbname=db_hash', 'root', '');

                                            // Get the total number of users.
                                            $sql = "SELECT COUNT(*) FROM products";
                                            $stmt = $db->prepare($sql);
                                            $stmt->execute();
                                            $row = $stmt->fetch();
                                            $total_products = $row['COUNT(*)'];

                                            // Display the total number of users.
                                            echo "<div class=\"col me-2\">
                                                    <div class=\"text-uppercase text-info fw-bold text-xs mb-1\"><span>total product</span></div>
                                                    <div class=\"text-dark fw-bold h5 mb-0\"><span>$total_products</span></div>
                                                </div>";

                                            ?>
                                        <div class="col-auto"><i class="fas fa-table fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Product List</p><button class="btn btn-primary btn-icon-split" type="button" data-bs-target="#add-product" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-download"></i></span><span class="text-white text">Add Product</span></button>
                        </div>
                        <div class="card-body">
                            
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Product Code</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Product Created</th>
                                            <th>Product Options (Stock In, Stock Out, Update and Remove)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include_once 'functions/view-products.php'; ?>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="add-product">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Product Information</p>
                    <form class="text-center" action="functions/add-product.php" method="post">
                        <div class="mb-3"><input class="form-control" type="text" pattern="^(?!\s).*$" name="product_name" placeholder="Product Name" required=""></div>
                        <div class="mb-3"><input class="form-control" type="number" name="size" placeholder="Size" required=""></div>
                        <div class="mb-3"><input class="form-control" type="number" name="qty" placeholder="Quantity"></div>
                        <div class="mb-3"><input class="form-control" type="number" name="price" placeholder="Price" required=""></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Product</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update-product">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Product</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Product Information</p>
                    <form class="text-center" action="functions/update-product.php"  method="post">
                        <input type="hidden" name="product_id">
                        <div class="mb-3"><input class="form-control" type="text" pattern="^(?!\s).*$" name="product_name" placeholder="Product Name" required=""></div>
                        <div class="mb-3"><input class="form-control" type="number" name="size" placeholder="Size" required=""></div>
                        <div class="mb-3"><input class="form-control" type="number" name="qty" placeholder="Quantity"></div>
                        <div class="mb-3"><input class="form-control" type="number" name="price" placeholder="Price" required=""></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Update Product</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="stock-in">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Stock-In</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Product Information</p>
                    <form class="text-center" action="functions/stock-in.php" method="post">
                        <input type="hidden" name="product_id">
                        <div class="mb-3"><input class="form-control" type="text" name="qty" placeholder="Quantity" required></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Stock In</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="stock-out">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Stock-out</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Product Information</p>
                    <form class="text-center" action="functions/stock-out.php" method="post">
                        <input type="hidden" name="product_id">
                        <div class="mb-3"><input class="form-control" type="text" name="qty" placeholder="Quantity" required></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Stock out</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confirmation">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirmation</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                <p>Are you sure you want to remove this product?</p>
                </div>
                <form action="functions/remove-product.php" method="post">
                <input type="hidden" name="product_id">
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script>
        
        $('button[data-bs-target="#stock-in"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });
        });

        $('button[data-bs-target="#stock-out"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });
        });

        $('button[data-bs-target="#update-product"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });
        });

        $('button[data-bs-target="#confirmation"]').on('click', function() {
        // Get the user ID from the data attribute.
        var product_id = $(this).data('product-id');
        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });
        });
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>