<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php 
        include 'bs.php'; 
    ?>

    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="../css/sales_orders.css">
    <link rel="icon" href="img/dashboard_icon.png">
    
    
</head>
<body>
    <div class="container-fluid px-0">
        <div class="left-sidebar">
            <div class="company-logo p-2 text-center">
                <label for="logo"><h3>Management</h3></label>
            </div>
            <div class="main-selection-form my-5 p-3">
                <ul>
                    <li>
                        <a href="../home/dashboard.php" class="active">Dashboard</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="../home/sales-orders.php">Sales Order</a>
                    </li>
                    <li>
                        <a href="../home/packages.php">Packages</a>
                    </li>
                    <li>
                        <a href="../home/invoices.php">Invoices</a>
                    </li>
                    <li>
                        <a href="../home/purchase_orders.php">Purchase Orders</a>
                    </li>
                    <li>
                        <a href="../home/billing.php">Billing</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="../home/reports.php">Reports</a>
                    </li>
                </ul>
            </div>
        </div>
    <!-- </div> this was added to the home folders -->
    
