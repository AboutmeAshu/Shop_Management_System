
<html>
<style type="text/css">
    .txt{
        font-family: sans-serif;
        font-weight: 40px ;
        font-size: 80px ;
        margin-top: 15% ;
        color: black;
    }

    .content{
        width : 70% ;
        height : 70% ;
        text-align: center;
        color: white ;
        background-image: linear-gradient(to bottom right, pink, orange, cyan) ;
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

    <p class="txt">Values Inserted in <br/> Product table</p>


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

    $d1 = $_POST['name'] ;
    $d3= $_POST['ID'] ;  
    $d6 = $_POST['price'] ;
    $d4 = $_POST['number1'] ;

    $que1 = "INSERT INTO product" . " VALUES ($d3,'$d1',$d6,$d4);" ;

    $stat1 = $connect->prepare($que1) ;

    $stat1->execute();

  ?>
</div>
</body>
</html>
                                                
                       