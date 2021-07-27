<html>
<head>

    <title> Dealer details </title>

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

    $query1 = "select Dealer_ID, Dealer_name ,Dealer_address, Contact_Number from dealer;" ;

    $stat1 = $connect->prepare($query1) ;

    $stat1->execute();
    
    echo "<br/><button align = 'center'>Dealer details</button><br/><table border = '5px' bgcolor = 'red' align = 'center' style = 'color:white ;'>" .PHP_EOL ;
    echo "<tr><td>Dealer_ID</td><td>Dealer_name</td><td>Dealer_address</td><td>Contact_Number</td></tr>";

    while($data = $stat1->fetch()){

        echo "<tr><td align = 'center'>" . $data['Dealer_ID'] . "</td><td align = 'center'>" . $data['Dealer_name'] . "</td><td align = 'center'>" . $data['Dealer_address'] . "</td><td align = 'center'>" . $data['Contact_Number'] ."</td></tr>" ;

    }

    echo"</table><br/>" ;
    ?>

     </div>
    </body>
</html>