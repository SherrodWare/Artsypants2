<!DOCTYPE html>
<html>
 <head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
     <title>Artsypants </title>
  
<!-- fonts from https://fonts.google.com-->
    <link href="https://fonts.googleapis.com/css?family=Diplomata|New+Rocker|Suez+One" rel="stylesheet">
<!-- styles-->
     <link rel="stylesheet" href="css/app.css" type="text/css"/>
     
<!-- javascript liabrary from https://developers.google.com-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src= "js/script.js"></script>
<!-- ekko lightbox stuff-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.css"/>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
 </head>
    
 <body>
<!--begin header-->
     <header>
         <div class="masthead" role="banner">
            <h1 class="display-3">Kerstin Graudins</h1>
         </div>
     </header>
<!--end header-->     
<!--begin nav bar-->
      <nav>
        <a id="mobile-only">
            <img src="images/Hamburger.png" id="burger"/>
            <img src="images/X-Icon.png" id="ex" class="hidden" />
            MENU
        </a>
        <ul id="nav">
            <li>
                <a href="">Home</a>
            </li>
            <li class="dropdown">
                <a href="" class="expand">Portfolio</a>
                <ul id="sub-menu" class="dropdown-content">
                    <li>
                        <a href="ig.html">Painting</a>
                    </li>
                    <li>
                        <a href="">Prints</a>
                    </li>
                    <li>
                        <a href="">Drawing</a>
                    </li>
                    <li>
                        <a href="">Sculpture</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </nav>
<?php include ("includes/simple.php");?>
 </body>   
 
</html>