
<?php

include 'menu.html';
include_once '../shared/config.php';

session_start();
$client_id= $_SESSION['client_id'];

$cmd="select products.*,cart.* from cart 
join products on cart.pdt_id=products.id 
where client_id=$client_id and is_ordered=1";

$sql_obj=mysqli_query($conn,$cmd);

echo "<div class='row'>";
echo "<div class='row m-0 p-0'>";
echo "<h1 class='h-primary'>Your Orders</h1>";
$total_price=0;
while($row=mysqli_fetch_assoc($sql_obj))
{
     $name=$row['name'];
            $impath=$row['impath'];
            $price=$row['price'];
            $details=$row['details'];
            $pid=$row['pdt_id'];

                        
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
                            <button class='mt-3 p-3 btn btn-success gbtn'><i class='fa fa-shopping-cart' aria-hidden='true'></i>Add to Cart</button>
                            </a>
                    </div>
                </div>
            </div>
        </div>";
}
echo "</div>";


echo "</div>";//closing the parent row

?>
<html>
    <head>
        
        
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
                left:57%;
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
                margin-top:1rem;
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
        </style>

    </head>
</html>
