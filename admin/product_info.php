<?php
    include 'menu.html';
    include_once '../shared/config.php';

    $pdt_id = $_GET['pdt_id'];

    $cmd="select id,name,price,details from products where id = $pdt_id limit 1";

    $sql_obj=mysqli_query($conn,$cmd);

    echo "<table class='table'>
     
    <thead class='table-dark'>
    <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Detail</th>

    </tr>
    </thead>
    <tbody>
    ";      
    while($row=mysqli_fetch_assoc($sql_obj))
    {
        $id=$row['id'];
        $P_name=$row['name'];
        $price=$row['price'];
        $details=$row['details'];

        echo "<tr>
            <td>$id</td>
            <td>$P_name</td>
            <td>$price</td>
            <td>$details</td>
        </tr>";
    }
    echo "</tbody>
        </table>";


    echo "<a href='view_orders.php'><button class='btn btn-success 'mt-3 p-3'>Go Back</button></a>";
?>

    

    