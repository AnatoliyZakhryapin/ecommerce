<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazone</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script> 
       $(document).ready(function(){
       $("#flip").click(function(){
        $(".menu").slideToggle("slow");
         });
        $("#flip2").click(function(){
        $(".menu2").slideToggle("slow");
         });
        });
    </script>

    <script>
      $(document).ready(function(){
        $("#add").click(function(){
          addCart();
          alert("ciao");
          $("#saluto").html("Ali <b>exspress</b>");
           });
      });
</script>


</head>

<body>

    <header>
        <h1 id="saluto">Amazone</h1>
    </header>
