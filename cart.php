<?php 
session_start();
require 'inc/head.php'; 
include 'inc/data/products.php';
?>
<section class="cookies container">
    <div class="row">
        <h1>mon panier</h1>
        <table>
            <?php
 if(!empty($_SESSION['cart'])) {
    
    foreach ($_SESSION['cart'] as $addedCookie => $quantity) {
        echo '<tr style="border-bottom:1px solid #CCCC; padding-bottom:5px">';
            echo '<td style="width:30%;padding:5px"><img src="assets/img/product-'.$addedCookie.'.jpg" alt="'.$catalog[$addedCookie]['name'].'" class="img-responsive" width="100px"></td>';
            echo '<td style="width:50%">'.$catalog[$addedCookie]['name'].'<br/>'.$catalog[$addedCookie]['description'].'</td>';
            echo '<td>'.$quantity.' </td>';
        echo '</tr>';

   }
}

    ?></table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
