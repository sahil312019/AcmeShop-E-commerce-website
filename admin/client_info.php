<?php
    include 'menu.html';
    include_once '../shared/config.php';

    $client_id = $_GET['client_id'];

    $cmd="select id,name,mailid,mobile from clients where id = $client_id limit 1";

    $sql_obj=mysqli_query($conn,$cmd);

    echo "<table class='table'>
     
    <thead class='table-dark'>
    <tr>
        <th>Client Id</th>
        <th>Name</th>
        <th>Mail Id</th>
        <th>Mobile</th>

    </tr>
    </thead>
    <tbody>
    ";      
    while($row=mysqli_fetch_assoc($sql_obj))
    {
        $id=$row['id'];
        $name=$row['name'];
        $mail_id=$row['mailid'];
        $mobile=$row['mobile'];

        echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$mail_id</td>
            <td>$mobile</td>
        </tr>";
    }
    echo "</tbody>
        </table>";

    echo "<a href='view_orders.php'><button class='btn btn-success 'mt-3 p-3'>Go Back</button></a>";
?>

    

    