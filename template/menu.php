
<div id="flip">Menu</div>
<menu class="menu" id="main-menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li> 
            <div id="flip2">Prodotti</div> 
            <div class="menu2"> 

                    <ol>
                        <li><a href="<?php echo APP_URL; ?>Telefonia.php">Telefonia</a></li>
                        <li><a href="<?php echo APP_URL; ?>pc.php">Pc</a></li>
                        <li><a href="<?php echo APP_URL; ?>grandielettrodomestici.php">Grandi elettrodomestici</a></li>
                        <li><a href="<?php echo APP_URL; ?>piccolielettrodomestici.php">Piccoli elettrodomestici</a></li>
                    </ol>
            </div>
        </li>
        <li><a href="<?php echo APP_URL; ?>servizioclienti.php">servizioclienti</a></li>
        <li><a href="<?php echo APP_URL; ?>account.php">account</a></li>
    </ul>
</menu>

    <div> Carrello <span id="cartItems">0</span>
        <button id="delite">Svuota carrello</button>
    </div>