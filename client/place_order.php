<?php

    include 'menu.html';
    include_once '../shared/config.php';

    session_start();
    $client_id=$_SESSION['client_id'];
    $cmd="update cart set is_ordered=1 where client_id=$client_id";

    $sql_result=mysqli_query($conn,$cmd);
    if($sql_result)
    {
        echo "<div class='card'>
        <div class='product align-items-center p-2 text-center'>
            
            <h1>Ordered Placed Successfully!!</h1>

            
        </div>

        <div class='p-3 atc text-center text white mt-3 cursor'>
            <a href='view.php'>
            <button class='btn btn-success mt-3 p-3'>Go to Products</button>
            </a>
        </div>
        <div class='p-3 atc text-center text white mt-3 cursor'>
            <a href='your_orders.php'>
            <button class='btn btn-success mt-3 p-3'>View your Orders</button>
            </a>
        </div>
        
    </div>";
    }
    else{
        echo "<div class='card'>
        <div class='product align-items-center p-2 text-center'>
            
            <h1>Couldn't Place Order</h1>

            
        </div>

        <div class='p-3 atc text-center text white mt-3 cursor'>
        < href='view_cart.php'>
            <button class='btn btn-success mt-3 p-3'>Go to View Cart</button>
            </a>
        </div>
        
        <div class='p-3 atc text-center text white mt-3 cursor'>
            <a href='your_orders.php'>
            <button class='btn btn-success mt-3 p-3'>View your Orders</button>
            </a>
        </div>
    </div>";
    }
?>
