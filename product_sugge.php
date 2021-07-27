<html>
<head>

    <title> Products suggessions </title>

</head>
<link rel="stylesheet" type="text/css" href="animation.css">
<body>

<div class="back"> 
        <div class="bubbles">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
            <img src="bubble5.jpg" alt="">
        </div>


<?php

    $dns="mysql:host=localhost;dbname=shop_management";
    $Username="root";
    $Password="" ;

    try{

    	$connect = new PDO($dns, $Username, $Password) ;

    }catch(Exception $e){
    	$error_msg = $e->getMessage();
    	echo "<h3>Error is : " . $error_msg . "</h3>" ;
    }

    $query1 = "select Product_ID, Product_name, Product_Price, Available_Stock  from product where Available_Stock < 20 order by Available_Stock;" ;

    $query2 = "select Product_name from product where Available_Stock = ( select min(Available_Stock) from product) ;" ;

    $stat1 = $connect->prepare($query1) ;

    $stat1->execute();

    $stat2 = $connect->prepare($query2) ;

    $stat2->execute();

    $data2 = $stat2->fetch() ;

    echo "<br/><button align = 'center'>Product Suggestion</button><br/><table border = '5px' bgcolor = 'indigo' align = 'center' style = 'color:white;'>" .PHP_EOL ;
    echo "<tr><td>Product_ID</td><td>Product_name</td><td>Product_Price</td><td>Available_Stock</td></tr>";

    while($data = $stat1->fetch()){

        echo "<tr><td align = 'center'>" . $data['Product_ID'] . "</td><td align = 'center'>" . $data['Product_name'] . "</td><td align = 'center'>" . $data['Product_Price'] . "</td><td align = 'center'>" . $data['Available_Stock'] ."</td></tr>" ;

    }

    echo"</table><br/>" ;

    
    echo "<script>alert(' " .$data2['Product_name'] ." has very less stock available .')</script>";
    

    ?>

     </div>
    </body>
</html>