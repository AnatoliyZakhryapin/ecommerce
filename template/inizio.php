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
      
      let cartItems = Array.isArray(JSON.parse(localStorage.getItem("cartItems"))) ? JSON.parse(localStorage.getItem("cartItems")) : [];

      function addCart(quantita, idProdotto) {
              let presente = false;
              for (let i = 0; i < cartItems.length; i++) {
                if (cartItems[i].idProdotto == idProdotto) {
                  cartItems[i].quantita += quantita;
                  presente = true;
                }
              }
              if (!presente) {
                cartItems.push({quantita: quantita, idProdotto: idProdotto});
              }
              let totale = 0;
              for (let i = 0; i < cartItems.length; i++) {
                totale += cartItems[i].quantita;
              }
              $('#cartItems').html(totale);
              localStorage.setItem('cartItems', JSON.stringify(cartItems));
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
      
      let tot = 0;
      for (let i = 0; i < cartItems.length; i++) {
        tot += cartItems[i].quantita;
      }
      $('#cartItems').html(tot);
      
      $("#add").click(function() {
        addCart(1, 'prod-01');
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