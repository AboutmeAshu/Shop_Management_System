
<html>
<style type="text/css">
    p{
        font-family: sans-serif;
        font-weight: 40px ;
        font-size: 70px ;
        margin-top: 15% ;
        color: black ;
    }

    .content{
        width : 70% ;
        height : 70% ;
        text-align: center;
        color: white ;
        background-image: linear-gradient(to bottom left, blue, orange, pink) ;
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

    $d1 = $_POST['Customer'] ;
    $d2 = $_POST['amount'] ;

    $que1 = " UPDATE customer SET Total_Borrowings = Total_Borrowings - $d2 where Customer_ID = $d1 ;" ;

    $stat1 = $connect->prepare($que1) ;

    $stat1->execute() ;

    $que2 = "SELECT Total_Borrowings as tot FROM customer where Customer_ID = $d1 ;" ;

    $stat2 = $connect->prepare($que2) ;

    $stat2->execute() ;

    $data = $stat2->fetch() ;

    $amt = $data['tot'] ;

    if($amt == 0){
    
    $que3 = "UPDATE customer SET Payment_Status = 'Completed' WHERE Customer_ID = $d1 ;" ;
    $stat3 = $connect->prepare($que3) ;
    $stat3->execute() ;

    echo "<p>All Borrowings cleared successfully .</p>" ;

}
 else{
    echo "<p>Remaining borrowing amount <br/> RS ". $amt . " </p>" ;
}
  ?>

</div>
</body>
</html>