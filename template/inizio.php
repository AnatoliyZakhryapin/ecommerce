<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amazone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo APP_URL; ?>src/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      function addCart() {
              cartItems = 1*(cartItems+1);
              $('#cartItems').html(cartItems);
              localStorage.setItem('cartItems', cartItems);
              alert(cartItems);
      }

      function deliteCart() {
            if(cartItems > 0){
              cartItems = 0;
              $('#cartItems').html(cartItems);
              localStorage.clear();
            }else{
              $('#cartItems').html(cartItems);
            };
            alert("ok");
      }

      let cartItems = isNaN(parseInt(localStorage.getItem("cartItems"))) ? 0 : parseInt(localStorage.getItem("cartItems"));
      $('#cartItems').html(cartItems);
      
      $("#add").click(function() {
        addCart();
      });

      $("#delite").click(function(){
       deliteCart();
      });

     /* $("#delite").click(function(){
       $("#cartItems").html("0");
      }); */

      $("#flip").click(function() {
        $(".menu").slideToggle("slow");
      });
      $("#flip2").click(function() {
        $(".menu2").slideToggle("slow");
      });

     
    });
  </script>
</head>

<body>

  <header>
    <h1 id="saluto">Amazone</h1>
  </header>