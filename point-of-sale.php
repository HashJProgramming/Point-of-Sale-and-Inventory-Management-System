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
                    <div class="container-fluid"><span><?php echo $_SESSION['level']; ?>KYLE SHOE'S SHOP POINT OF SALE AND INVENTORY MANAGEMENT SYSTEM</span></div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body text-center p-4">
                                    <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                                    <h4 class="display-4 fw-bold card-title">$15</h4>
                                </div>
                                <div class="card-footer p-4">
                                    <form class="text-center" method="post">
                                        <div class="mb-3"></div>
                                        <div class="mb-3"></div>
                                        <div class="mb-3"><input class="form-control" type="text" name="discount" placeholder="Discount %"></div>
                                        <div class="mb-3"></div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Purchase&nbsp;</button></div>
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
                                                            <th>Price</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;000001</td>
                                                            <td>Addidas</td>
                                                            <td>Small</td>
                                                            <td>$162,700</td>
                                                            <td><button class="btn btn-danger btn-icon-split" type="button" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">000002</td>
                                                            <td>Lumigas</td>
                                                            <td>Medium</td>
                                                            <td>$1,200,000</td>
                                                            <td><button class="btn btn-danger btn-icon-split" type="button" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;00003</td>
                                                            <td>Nanigas</td>
                                                            <td>Large</td>
                                                            <td>$86,000</td>
                                                            <td><button class="btn btn-danger btn-icon-split" type="button" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button></td>
                                                        </tr>
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
                                    <div class="row">
                                        <div class="col-md-6 text-nowrap">
                                            <div id="dataTable_length-1" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                        <option value="10" selected="">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>&nbsp;</label></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-md-end dataTables_filter" id="dataTable_filter-1"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive table mt-2" id="dataTable-2" role="grid" aria-describedby="dataTable_info">
                                        <table class="table table-hover table-bordered my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Size</th>
                                                    <th>Price</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;000001</td>
                                                    <td>Addidas</td>
                                                    <td>Small</td>
                                                    <td>$162,700</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col"><button class="btn btn-success btn-icon-split" type="button" data-bs-target="#add-item" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Add</span></button></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">000002</td>
                                                    <td>Lumigas</td>
                                                    <td>Medium</td>
                                                    <td>$1,200,000</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col"><button class="btn btn-success btn-icon-split" type="button" data-bs-target="#add-item" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Add</span></button></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;00003</td>
                                                    <td>Nanigas</td>
                                                    <td>Large</td>
                                                    <td>$86,000</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col"><button class="btn btn-success btn-icon-split" type="button" data-bs-target="#add-item" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-check"></i></span><span class="text-white text">Add</span></button></div>
                                                        </div>
                                                    </td>
                                                </tr>
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
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Point of Sale</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Purchase Confirmation&nbsp;</p>
                    <div class="card">
                        <div class="card-body text-center p-4">
                            <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                            <h4 class="display-4 fw-bold card-title">$15</h4>
                        </div>
                        <div class="card-footer p-4">
                            <ul class="list-unstyled"></ul>
                            <div>
                                <ul class="list-unstyled"></ul>
                            </div>
                            <div class="card" style="margin-top: 16px;">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold">Items</p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table mt-2" id="dataTable-3" role="grid" aria-describedby="dataTable_info">
                                        <table class="table table-hover table-bordered my-0" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Product Code</th>
                                                    <th>Product Name</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;000001</td>
                                                    <td>Addidas</td>
                                                    <td>Small</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">000002</td>
                                                    <td>Lumigas</td>
                                                    <td>Medium</td>
                                                    <td>$1,200,000</td>
                                                </tr>
                                                <tr>
                                                    <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/shoes.png">&nbsp;00003</td>
                                                    <td>Nanigas</td>
                                                    <td>Large</td>
                                                    <td>$86,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
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
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="button">Remove</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="add-item">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Item</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Item Information</p>
                    <form class="text-center" method="post">
                        <div class="mb-3"></div>
                        <div class="mb-3"><input class="form-control" type="text" name="item_qty" value="1" placeholder="Quantity" required=""></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add Item</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>