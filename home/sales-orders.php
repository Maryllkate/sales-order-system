<?php 
    include '../include/sidebar.php';
?>
    <div id="sales-orders-container">
        <nav class="navbar navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-light"><h3>SALES ORDER</h3></a>  
            </div>
        </nav>

        <div class="tab-selections">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#q">Quotations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#so">Sale Orders</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="#s">Shipping</a>
                </li>
            </ul>
        </div>

        <div class="quotations-container">
            <div class="container-fluid">
                <form class="d-flex p-2">
                    <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
            <div class="quotations-section-details">
                quotations area
            </div>
        </div>





    </div>

</div>
</body>
</html>


