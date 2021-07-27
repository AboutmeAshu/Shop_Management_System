<html>
<head>

    <title> Purchase History </title>

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

    $query1 = "select Product_ID, Customer_ID ,Date_bought, Borrowings  from bought;" ;

    $stat1 = $connect->prepare($query1) ;

    $stat1->execute();
    

    echo "<br/><button align = 'center'>Bought details</button><br/><table border = '5px' bgcolor = 'cyan' align = 'center'>" .PHP_EOL ;
    echo "<tr><td>Product_ID</td><td>Customer_ID</td><td>Date_bought</td><td>Borrowings</td></tr>";

    while($data = $stat1->fetch()){

        echo "<tr><td align = 'center'>" . $data['Product_ID'] . "</td><td align = 'center'>" . $data['Customer_ID'] . "</td><td align = 'center'>" . $data['Date_bought'] . "</td><td align = 'center'>" . $data['Borrowings'] ."</td></tr>" ;

    }

    echo"</table><br/>" ;
    ?>

     </div>
    </body>
</html>