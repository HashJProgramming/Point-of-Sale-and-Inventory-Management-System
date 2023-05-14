<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Users - Point of Sale and Inventory Management System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 toggled">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-text mx-3"><span><strong>KSSPOSIM&nbsp;</strong></span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="users.php"><i class="fas fa-user"></i><span>Users</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="point-of-sale.php"><i class="fas fa-table"></i><span>Point of Sale</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="inventory.php"><i class="fas fa-table"></i><span>Inventory</span></a><a class="nav-link" href="sales.php"><i class="fas fa-table"></i><span>Sales Report</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="logs.php"><i class="fas fa-user-circle"></i><span>Logs</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><span>KYLE SHOE'S SHOP POINT OF SALE AND INVENTORY MANAGEMENT SYSTEM</span></div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4">Users Management&nbsp;</h3>
                    <div class="row">
                        <div class="col-md-6 col-xl-4 mb-4">
                            <div class="card shadow border-start-warning py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>total users</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>3</span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0"></h3><button class="btn btn-primary btn-sm d-none d-sm-inline-block" type="button" data-bs-target="#add-user" data-bs-toggle="modal"><i class="fas fa-user fa-sm text-white-50"></i>&nbsp;Create Account</button>
                    </div>
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Users List</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label class="form-label">Show&nbsp;<select class="d-inline-block form-select form-select-sm">
                                                <option value="10" selected="">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table table-hover table-bordered my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Type</th>
                                            <th>User Created</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/profile.png">&nbsp;000001</td>
                                            <td>user1</td>
                                            <td>1234</td>
                                            <td>Cashier</td>
                                            <td>2008/11/28</td>
                                            <td><button class="btn btn-warning btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#update" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text">Change Password</span></button><button class="btn btn-danger btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button><a class="btn btn-info btn-icon-split" role="button" style="margin: 2px;" href="logs.php"><span class="text-white-50 icon"><i class="fas fa-info-circle"></i></span><span class="text-white text">Logs</span></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/profile.png">000002</td>
                                            <td>user2</td>
                                            <td>1234</td>
                                            <td>Cashier</td>
                                            <td>2009/10/09</td>
                                            <td><button class="btn btn-warning btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#update" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text">Change Password</span></button><button class="btn btn-danger btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button><a class="btn btn-info btn-icon-split" role="button" style="margin: 2px;" href="logs.php"><span class="text-white-50 icon"><i class="fas fa-info-circle"></i></span><span class="text-white text">Logs</span></a></td>
                                        </tr>
                                        <tr>
                                            <td><img class="rounded-circle me-2" width="30" height="30" src="assets/img/avatars/profile.png">&nbsp;00003</td>
                                            <td>user3</td>
                                            <td>1234</td>
                                            <td>Cashier</td>
                                            <td>2009/01/12<br></td>
                                            <td><button class="btn btn-warning btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#update" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-exclamation-triangle"></i></span><span class="text-white text">Change Password</span></button><button class="btn btn-danger btn-icon-split" type="button" style="margin: 2px;" data-bs-target="#confirmation" data-bs-toggle="modal"><span class="text-white-50 icon"><i class="fas fa-trash"></i></span><span class="text-white text">Remove</span></button><a class="btn btn-info btn-icon-split" role="button" style="margin: 2px;" href="logs.php"><span class="text-white-50 icon"><i class="fas fa-info-circle"></i></span><span class="text-white text">Logs</span></a></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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
    <div class="modal fade" role="dialog" tabindex="-1" id="add-user">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add User</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>User Information</p>
                    <form class="text-center" method="post">
                        <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username" required=""></div>
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                        <div class="mb-3"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Add User</button></div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="update">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>User Information</p>
                    <form class="text-center" method="post">
                        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Confirm Password"></div>
                        <div class="mb-3"><input class="form-control" type="password" name="new_password" placeholder="New Password"></div>
                        <div class="mb-3"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Change Password</button></div>
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
                    <p>Are you sure you want to remove this user?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-danger" type="button">Remove</button></div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>