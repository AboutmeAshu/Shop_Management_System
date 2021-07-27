
<html>
<style type="text/css">
    p{
        font-family: sans-serif;
        font-weight: 40px ;
        font-size: 80px ;
        margin-top: 15% ;
        color: black ;
    }

    .content{
        width : 70% ;
        height : 70% ;
        text-align: center;
        color: white ;
        background-image: linear-gradient(to bottom left, red, yellow, green) ;
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

    $que1 = "SELECT sum(Total_Borrowings) as tot from customer ;" ;

    $stat1 = $connect->prepare($que1) ;

    $stat1->execute() ;

    $data = $stat1->fetch() ;

    echo "<p>Total Borrowings in shop <br/> Rs ". $data['tot'] . " </p>" ;
  ?>

</div>
</body>
</html>