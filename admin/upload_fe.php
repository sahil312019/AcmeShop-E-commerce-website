<?php

include 'menu.html';
echo "<h1 class='h-primary'>Welcome Admin</h1>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Product Add</title>
      <link rel="stylesheet" href="css/upload_fe.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://kit.fontawesome.com/aabaffe564.js" crossorigin="anonymous"></script> 
      <style>
         .h-primary{
                /* color: white; */
                font-size:2.8rem;
                font-family: 'Anton', cursive;
                padding:12px;
                padding: 2rem;
                color:white;
                background: linear-gradient(to right, #9F66FF, #DFCBFF);
            }
    </style>
    </head>
   <body>
    <div class="container">
        <div class="text">ADD Product</div>
        <form enctype="multipart/form-data" action="upload.php" method="POST" > 
           <div class="form-row">
              <div class="input-data">
                 <input type="text"  name="name" id="" placeholder="Name of the Product" required>
                 <div class="underline"></div>
                 
              </div>
              <div class="input-data">
                <input type="file" name="imname" accept=".jpg" id="" required>
                 <div class="underline"></div>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                <input type="number" name="price" id="" placeholder="Price of the Product in Rupees" required>
                 <div class="underline"></div>
                 
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea name="details" id="" rows="15" cols="80"  placeholder="Product Description" required></textarea>
                 <br />
                 <div class="underline"></div>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="Add Product">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
   </body>
</html>