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
                font-family: 'Anton', cursive;
                padding:12px;
                padding: 2rem;
                color:white;
                background: linear-gradient(to right, #9F66FF, #DFCBFF);
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

    include_once '../shared/config.php';
    include 'menu.html';
    $sql_obj=mysqli_query($conn,'select * from products');

    echo "<div class='row m-0 p-0'>";
    echo "<h1 class='h-primary'>Welcome Admin</h1>";
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
                        <div class='p-3 del text-center text white mt-3 cursor'>
                            <a href='delete_product.php?pid=$pid'>
                            <button class='mt-3 p-3 btn btn-danger bi-trash-fill rbtn'> Delete Product</button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>";
    }


    echo "</>";



   