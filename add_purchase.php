
<html>
<style type="text/css">
    .txt{
        font-family: sans-serif;
        font-weight: 40px ;
        font-size: 80px ;
        margin-top: 15% ;
    }

    .content{
        width : 70% ;
        height : 70% ;
        text-align: center;
        color: white ;
        background-image: linear-gradient(to bottom left, pink, indigo, cyan) ;
        border : 5px solid black ;
        border-radius : 50% ;
        position: absolute;
        align-self: center;
        top: 15%;
        left: 12%;
    }

</style>
<body >
    <div  class = "content" >

    <p class="txt">Values Inserted in <br/> Bought table</p>


<?php

    $dns= "mysql:host=localhost;dbname=shop_management";
    $Username="root";
    $Password="" ;

    try{

      $connect = new PDO($dns, $Username, $Password) ;

    }catch(Exception $e){
      $error_msg = $e->getMessage();
      echo "<h3>Error is : " . $error_msg . "</h3>" ;
    }

    $d1 = $_POST['date'] ;
    $d3= $_POST['borrowing'] ;      
    $d2 = $_POST['Customer'] ;
    $d4 = $_POST['Product'] ;
    $d5 = $_POST['Quantity'] ;

    $que1 = "INSERT INTO bought" . " VALUES ('$d1',$d3,$d4,$d2,$d5);" ;

    $que2 = "UPDATE product SET Available_Stock = Available_Stock - $d5 where Product_ID = $d4 ;" ;  

    $que3 = "UPDATE customer SET Total_Borrowings = Total_Borrowings + $d3 where Customer_ID = $d2 ; " ;

    $que4 = "UPDATE customer SET Total_Purchase = Total_Purchase + ((SELECT Product_Price from product where Product_ID = $d4) * $d5) where Customer_ID = $d2;";

    $stat1 = $connect->prepare($que1) ;

    $stat1->execute();

    $stat2 = $connect->prepare($que2) ;

    $stat2->execute();

    $stat3 = $connect->prepare($que3) ;

    $stat3->execute();

    $stat4 = $connect->prepare($que4) ;

    $stat4->execute();

    if($d3 > 0){

    $que5 = "UPDATE customer SET Payment_Status = 'Incompleted' WHERE Customer_ID = $d2 ;" ;

    $stat5 = $connect->prepare($que5) ;

    $stat5->execute() ;

}

  ?>

</div>
</body>
</html>