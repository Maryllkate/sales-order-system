<?php 
    include '../include/sidebar.php';
?>
    <div id="sales-orders-container">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light"><h3>SALES ORDER</h3></a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </form>
            </div>
        </nav>

        <div class="tab-selections">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./salesorder/quotations.php">Quotations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./salesorder/create-so.php">Sale Orders</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="./salesorder/shipping.php">Shipping</a>
                </li>
            </ul>
        </div>





    </div>

</div>
</body>
</html>


