<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Index</title>
        
        <!--Latest compiled and minified CSS-->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!--Jquery Lib-->
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <!-- latest compiled and minified JavaScript-->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
        
        
    </head>
    <body>
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
    ?>
          
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a href="index.html" class="navbar-brand">Shop Management system</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Home</a></li>
                        
                       
                    </ul>
                </div>
            </div>
        </div>
        <div id="banner_image">
          <div class="container">
              <center>
              <div id="banner_content">
                  <a href="newindex.html" class="btn btn-danger btn-lg active">Customer</a>
                 <br><br><br><br>
            
                
                  <a href="productindex.html" class="btn btn-danger btn-lg active">Product</a>
                  
                 <br><br><br><br>
                  <a href="purchasenewindex.html" class="btn btn-danger btn-lg active">Purchase</a>
                  <br><br><br><br>
                  <a href="login.php" class="btn btn-danger btn-lg active">Dealer</a>
                 
              </div>
              </center>
          </div>
            
        </div>
        
        <footer>
        <div class="container">
        <center>
           
        </center>
        
        </div>
        </footer>
        
    </body>
</html>
