<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <style>
            .product img{
                    width:100%;
                    height: 15rem;
                    /* height:fit-content; */
                    object-fit:contain; 
                    margin-top:2rem;   
                }

            .card{
                box-shadow: 1rem 1rem 0.25rem 0.15rem #AFD6FF;
            }
            
            .price
            {

            }
            .details p
            {
                margin-top:30px;
            }
            .stick-to-cart
            {
                position:absolute;
                left:60%;
                top:4%;
                z-index: 10;
                padding:10px;
                background-color:tomato;
                border-radius:50%;
            }
        
            .card{
                border: none;
                outline: none;
                background-color: #fff;
                border-radius: 1.5rem;
                transition: transform .3s;
            }

            .card:hover{
                transform: translateY(-1rem);
                transition: transform .3s;
            }

            .text1{
                font-size: 1rem;
                color: #cbcbcb;
            }

            .info{
                line-height: 1rem;
            }

            .h-primary{
                /* color: white; */
                font-size:2.8rem;
                font-family: 'Russo One';
                padding:12px;
                padding: 2rem;
                color:white;
                background: linear-gradient(to right, #3E8AFF, #BBDEFF);
            }
            .gbtn:hover{
                background-color: rgb(71, 207, 82);
            }
            .rbtn:hover{
                background-color: rgb(255, 0, 0);
            }
        </style>
    </head>
</html>
<?php

session_start();
if(!isset($_SESSION['client_id']))
{
    echo "<h2 class='bg-danger'>Unauthorized to Access</h2>";
    echo "<a href='login.php'> Login First</a>";
    die;
}

    include 'menu.html';
    
    // session_start();
    $client_name=$_SESSION['client_name'];

    echo "<h1 class='h-primary'>Hi $client_name</h1>";

    include_once '../shared/config.php';
    
    $sql_obj=mysqli_query($conn,'select * from products');

    $client_id=$_SESSION['client_id'];
    $cart_obj=mysqli_query($conn,"select * from cart where client_id=$client_id and is_ordered=0");

    $cart_count=mysqli_num_rows($cart_obj);

    echo "<span class='stick-to-cart'>$cart_count</span>";
    echo "<div class='row m-0 p-0'>";
    while($row=mysqli_fetch_assoc($sql_obj))
    {
        $name=$row['name'];
        $impath=$row['impath'];
        $price=$row['price'];
        $details=$row['details'];
        $pid=$row['id'];
        
        
            echo "<div class='container col-3 mb-2 mt-2'>
            <div class='row m-0 p-0'>
                    <div class='card'>
                        <div class='product align-items-center p-2 text-center'>
                            <img src='$impath' class='rounded'>
                            <h1>$name</h1>
            
                            <div class='price'>
                                    <h3>$price Rs</h3>
                            </div>
                        </div>
                        <div class='details text-center'>
                                <p>$details</p>       
                        </div>
                        <div class='p-3 atc text-center text white mt-3 cursor'>
                            <a href='addtocart.php?pid=$pid'>
                            <button class='btn1 btn btn-success mt-3 p-3 gbtn'><i class='fa fa-shopping-cart' aria-hidden='true'></i>Add to Cart</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>";
    }


    echo "</div>";
?>
