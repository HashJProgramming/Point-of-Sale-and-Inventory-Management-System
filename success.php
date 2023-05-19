<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inventory &amp; Point of Sale System</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<body>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>KYLE SHOE'S SHOP POINT OF SALE AND INVENTORY MANAGEMENT SYSTEM</h2>
            </div>
        </div>
        <div class="row gy-4 gy-xl-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-xl-flex justify-content-center align-items-xl-center">
            <div class="col">
                <div class="card border-primary border-2">
                    <div class="card-body text-center p-4"><span class="badge rounded-pill bg-primary position-absolute top-0 start-50 translate-middle text-uppercase">Receipt</span>
                        <h6 class="text-uppercase text-muted card-subtitle">TOTAL</h6>
                        <h4 class="display-4 fw-bold card-title">$<?php echo $_GET['discounted_sales']; ?></h4>
                    </div>
                    <div class="card-footer p-4">
                        <div>
                            <ul class="list-unstyled">
                            <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Total Price ₱<?php echo $_GET['sales']; ?></span></li>

                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Discount ₱<?php echo $_GET['discount']; ?></span></li>

                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Amount ₱<?php echo $_GET['amount']; ?></span></li>

                                        <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                            <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                        </svg></span><span>Total Change ₱<?php echo $_GET['amount'] - $_GET['discounted_sales']; ?></span></li>

                                <li class="d-flex mb-2"><span class="bs-icon-xs bs-icon-rounded bs-icon-primary-light bs-icon me-2"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-check-lg">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                </svg></span><span>Purchase Date: <?php $date = date('Y-m-d H:i:s'); echo $date; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary d-block w-100" style="margin-bottom:10px; margin-top:10px" onclick="printReceipt()">Print</button>
                <a class="btn btn-primary d-block w-100" role="button" href="point-of-sale.php">Go back</a>
            </div>
        </div>
    </div>
    <script>
       function printReceipt() {
        var receipt = document.querySelector('.card.border-primary.border-2');
        var newWin = window.open('', 'Print-Window');
        newWin.document.open();
        newWin.document.write('<html lang="en"><head><link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"><link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css"><link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css"></head><body onload="window.print()"><div class="row mb-5"><div class="col-md-8 col-xl-6 text-center mx-auto"><h2>KYLE SHOES SHOP POINT OF SALE AND INVENTORY MANAGEMENT SYSTEM</h2></div></div>' + receipt.outerHTML + ' <script src="assets//bootstrap//js//bootstrap.min.js"><//script><script src="assets//js/bs-init.js"><//script><script src="assets//js/theme.js"><//script></body></html>');
        newWin.document.close();
        newWin.document.close();
        setTimeout(function(){newWin.close();},10);
}
    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>