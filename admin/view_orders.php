<?php
    include 'menu.html';
    include_once '../shared/config.php';
    $cmd="select * from cart where is_ordered=1";

    $sql_obj=mysqli_query($conn,$cmd);

    echo "<table class='table'>
     
    <thead  class='table-dark'>
    <tr>
    
        <th>Order Id</th>
        <th>Client Id</th>
        <th>Product Id</th>
        <th>Order Date</th>

    </tr>
    </thead>
    <tbody>
    ";      
    while($row=mysqli_fetch_assoc($sql_obj))
    {
        $order_id=$row['id'];
        $client_id=$row['client_id'];
        $pdt_id=$row['pdt_id'];
        $ordered_date=$row['ordered_date'];

        echo "<tr>
        
            <td>$order_id</td>
            <td>
            <a href='client_info.php?client_id=$client_id'>$client_id</a>
            </td>
            <td>
            <a href='product_info.php?pdt_id=$pdt_id'>$pdt_id</a>
            </td>
            <td>$ordered_date</td>
        </tr>";
    }
    echo "</tbody>
        </table>";
?>