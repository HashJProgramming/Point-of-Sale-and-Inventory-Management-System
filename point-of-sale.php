<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>POS - Point of Sale and Inventory Management System</title>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                                    <h4 class="display-4 fw-bold card-title">₱<?php include_once 'functions/pos-total.php'; ?></h4>
                                </div>
                                <div class="card-footer p-4">
                                    <form class="text-center" method="post">
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="button" data-bs-target="#purchase" data-bs-toggle="modal">Purchase&nbsp;</button></div>
                                    </form>
                                    <div class="card" style="margin-top: 16px;">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">Items</p>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Code</th>
                                                            <th>Product Name</th>
                                                            <th>Size</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php include_once 'functions/pos-history.php'; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Products</p>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                        <table class="table table-hover table-bordered my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Size</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php include_once 'functions/pos-view-products.php'; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="purchase">
        <div class="modal-dialog" role="document">
            <form action="functions/pos-transaction.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Point of Sale</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Purchase Confirmation&nbsp;</p>
                        <div class="card">
                            <div class="card-body text-center p-4">
                                <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                                <h4 class="display-4 fw-bold card-title">₱<?php include 'functions/pos-total.php'; ?></h4>
                                <div class="mb-3"><input class="form-control" type="number" name="discount" placeholder="Discount "></div>
                                <div class="mb-3"><input class="form-control" type="number" name="amount" placeholder="Amount "></div>
                                <input type="hidden" name="total_sales" value="<?php include 'functions/pos-total.php'; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="submit">Save</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="confirmation">
        <div class="modal-dialog" role="document">
            <form action="functions/pos-remove-history.php" method="post">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirmation</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to remove this product?</p>
                        <input type="hidden" name="history_id">
                        <input type="hidden" name="product_id">
                        <input type="hidden" name="product_qty">

                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="submit">Remove</button></div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-item">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Item</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Quantity</p>
                    <form class="text-center" action="functions/pos-add-item.php" method="post">
                        <input type="hidden" name="product_id">
                        <div class="mb-3"><input class="form-control" type="number" name="item_qty" value="1" placeholder="Quantity" required></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Item</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script>
        
        $('button[data-bs-target="#add-item"]').on('click', function() {
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
        var history_id = $(this).data('history-id');
        var qty = $(this).data('qty');
        

        console.log(product_id);
        // Set the value of all input fields with the name "userid" to the user ID.
        $('input[name="history_id"]').each(function() {
            $(this).val(history_id);
        });

        $('input[name="product_id"]').each(function() {
            $(this).val(product_id);
        });


        $('input[name="product_qty"]').each(function() {
            $(this).val(qty);
        });
        });
    </script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>