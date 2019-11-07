<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-21">
    <div class="container">
        <div class="tile-cart">
            <h1>Cart</h1>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="product-remove">&nbsp;</th>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-remove">
                                <a href="#">X</a>
                            </td>
                            <td class="product-thumbnail">
						        <a href="#"><img width="300" height="398" src="images/1.jpg"></a>
                            </td>
                            <td class="product-name">
						        <span>Blue Jacket</span>
                            </td>
                            <td class="product-name">
						        <span>$240.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="input-text" step="1" min="0" max="" name="cartnumber" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" >
                                </div>
                            </td>
                            <td class="product-subtotal">
						        <span>$240.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-remove">
                                <a href="#">X</a>
                            </td>
                            <td class="product-thumbnail">
						        <a href="#"><img width="300" height="398" src="images/1.jpg"></a>
                            </td>
                            <td class="product-name">
						        <span>Blue Jacket</span>
                            </td>
                            <td class="product-name">
						        <span>$240.00</span>
                            </td>
                            <td class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="input-text" step="1" min="0" max="" name="cartnumber" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric" >
                                </div>
                            </td>
                            <td class="product-subtotal">
						        <span>$240.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                 <div class="coupon">
                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> 
                                    <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                </div>
                                <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <div class="cart-collaterals">
                    <div class="carts-totals">
                        <h2>Cart totals</h2>
                        <table>
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td class="woocommerce-Price-amount">
                                        <span>$480.00</span>
                                    </td>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td class="title-shipping">
                                            <p>Free Shipping</p>
                                            <p> 
                                                Estimate for <strong>Vietnam</strong>
                                            </p>
                                            <p>Change address</p>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="woocommerce-Price-currencySymbol">$</span>240.00</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                        <div class="proccess-checkout">
                            <button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Proccess-checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>   
</div>
