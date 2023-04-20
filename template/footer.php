
<script>
        var cartItems = localStorage.getItem("cartItems")*1;
        function addCart() {
                cartItems = 1*(cartItems+1);
                $('#cartItems').html(cartItems);
                localStorage.setItem('cartItems', cartItems);
                alert(cartItems);
        }
</script>

<footer>      
  <span id="1"> Amazone </span> Powered by Anatoliy
</footer>



</body>
</html>