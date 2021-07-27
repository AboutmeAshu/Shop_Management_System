<html>
<head>

    <title> Customer details</title>

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

    $query1 = "select Customer_ID, Customer_address, Customer_name, Total_Purchase  from customer;" ;

    $stat1 = $connect->prepare($query1) ;

    $stat1->execute();
    

    echo "<br/><button align = 'center'>Customer details</button><br/><table border = '5px' bgcolor = 'pink' align = 'center' >" .PHP_EOL ;
    echo "<tr><td>Customer_ID</td><td>Customer_address</td><td>Customer_name</td><td>Total_Purchase</td></tr>";

    while($data = $stat1->fetch()){

        echo "<tr><td align = 'center'>" . $data['Customer_ID'] . "</td><td align = 'center'>" . $data['Customer_address'] . "</td><td align = 'center'>" . $data['Customer_name'] . "</td><td align = 'center'>" . $data['Total_Purchase'] ."</td></tr>" ;

    }

    echo"</table><br/>" ;
    ?>

</div>
    </body>
</html>