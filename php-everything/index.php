<!doctype html>
<html>
    <meta charset ="utf-8">
    <meta name ="viewport" content="width=device-width, intial-scale=1">
    <title>Custom Coding</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
<!-- <script src="../project.js"></script> -->
<!-- <script src="../demo.js"></script>
 --><link rel="stylesheet" href="backpack.css">

 

<!--      <link rel="stylesheet" href="../project.css">
 -->    
    </head>
    <body>
    <div id="wrap">
        <header>
            <h1 href="#"> ZAINO</h1>
            <nav>
               <li> <a href="project.php">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href=".html">Bike convertibles</a></li>
<li><a href=".html">Back packs</a></li>
<li><a href="contact.html">Contact</a></li>
                
            </nav>
            </header>
            
            <section class="hero">
            <div class="background-image" style="background-image: url(../hiking.jpg)"></div>
                <div class="hero-content-area">
                <h1>Contact Us</h1>
                    <h3> Unmissable Adventure Tours Around the World</h3>
                
                </div>
                
            </section>
        </div>


<?php
require_once "ShoppingCart.php";

$member_id = 2; // you can your integerate authentication module here to get logged in member

$shoppingCart = new ShoppingCart();
if (! empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (! empty($_POST["quantity"])) {
                
                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["id"], $member_id);
                
                if (! empty($cartResult)) {
                    // Update cart item quantity in database
                    $newQuantity = $cartResult[0]["quantity"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["id"]);
                } else {
                    // Add to cart table
                    $shoppingCart->addToCart($productResult[0]["id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            // Delete single entry from the cart
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            // Empty cart
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>
<HTML>
<HEAD>
<TITLE>Enriched Responsive Shopping Cart in PHP</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
<?php
$cartItem = $shoppingCart->getMemberCartItem($member_id);
$item_quantity = 0;
$item_price = 0;
if (! empty($cartItem)) {
    if (! empty($cartItem)) {
        foreach ($cartItem as $item) {
            $item_quantity = $item_quantity + $item["quantity"];
            $item_price = $item_price + ($item["price"] * $item["quantity"]);
        }
    }
}
?>
<div id="shopping-cart">
        <div class="txt-heading">
            <div class="txt-heading-label">Shopping Cart</div>

            <a id="btnEmpty" href="index.php?action=empty"><img
                src="image/empty-cart.png" alt="empty-cart"
                title="Empty Cart" class="float-right" /></a>
            <div class="cart-status">
                <div>Total Quantity: <?php echo $item_quantity; ?></div>
                <div>Total Price: $ <?php echo $item_price; ?></div>
            </div>
        </div>
        <?php
        if (! empty($cartItem)) {
            ?>
<?php
            require_once ("cart-list.php");
            ?>  
            <div class="align-right">
            <a href="process-checkout.php"><button class="btn-action" name="check_out">Go To Checkout</button></a>
            </div>
<?php
        } // End if !empty $cartItem
        ?>

</div>
<?php
require_once "product-list.php";
?>
    

    <style>
        



    </style>
</BODY>
</HTML>