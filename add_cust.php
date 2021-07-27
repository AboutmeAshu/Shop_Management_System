
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
        background-image: linear-gradient(to bottom right, red, green, blue) ;
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

    <p class="txt">Values Inserted in <br/> Customer table</p>


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

    $d1 = $_POST['Email'] ;
    $d3= $_POST['Address'] ;      
    $d2 = $_POST['ID'] ;
    $d4 = $_POST['number1'] ;
    $d5 = $_POST['number2'] ;
    $d6 = $_POST['status'] ;

    $que1 = "INSERT INTO customer" . " VALUES ($d2,'$d1','$d3',$d4,'$d6',$d5);" ;

    $stat1 = $connect->prepare($que1) ;

    $stat1->execute();

  ?>
</div>
</body>
</html>
                                                
                       