<?php
include 'menu.html';
include_once '../shared/config.php';

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details'];
$fileobj=$_FILES['imname'];

$imname = $fileobj['name'];

date_default_timezone_set('Asia/Kolkata');

$unique_name=date("Y_m_d_H_i_s");

$target_path="../images/$unique_name.jpg";

move_uploaded_file($fileobj['tmp_name'],$target_path);//source file -> destination file


$cmd = "Insert into products(name,price,details,impath) values('$name',$price,'$details','$target_path')";

$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{   
    
    echo "<div class='card'>
    <div class='product align-items-center p-2 text-center'>
        
        <h1>Product Uploaded Successfully</h1>

        
    </div>

    <div class='p-3 atc text-center text white mt-3 cursor'>
        <a href='view.php'>
        <button class='btn btn-success mt-3 p-3 gbtn'>View Products</button>
        </a>
    </div>
    <div class='p-3 atc text-center text white mt-3 cursor'>
        <a href='upload_fe.php'>
        <button class='btn btn-success mt-3 p-3  gbtn'>Add Products</button>
        </a>
    </div>
    
</div>";
}
else{
    echo "Upload Failed, check Query=$cmd";
}

?>
<html>
    <head>
        <style>
            .gbtn:hover{
                background-color: rgb(71, 207, 82);
            }
            .rbtn:hover{
                background-color: rgb(255, 0, 0);
            }
        </style>

    </head>
</html>
