<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
    <div class="container">
        <div class="row">
                <h4>Billing details</h4>
                <h5>Checkout</h5>
                <div class="chu1"> First name<span class="sao"> *</span></div>
                <div class="chu2"> Last name<span class="sao"> *</span></div>
                <input type="" class="nhap2">
                <input type="" class="nhap3">
                <label class="chu"> Company name (optional)</label><br>
                <input type="" class="nhap">
                <label class="chu"> Country<span class="sao"> *</span></label><br>
                <input type="" class="nhap" value="Vietnam" >
                <label class="chu"> Street address<span class="sao"> *</span></label></label><br>
                <input type="" class="nhap" value="House number and street name">
                <label class="chu"> Postcode / ZIP (optional)</label><br>
                <input type="" class="nhap">
                <label class="chu"> Town / City<span class="sao"> *</span></label><br>
                <input type="" class="nhap">
                <label class="chu"> Phone<span class="sao"> *</span></label><br>
                <input type="" class="nhap">
                <label class="chu"> Email address<span class="sao"> *</span></label><br>
                <input type="" class="nhap">
                <input type="checkbox" class="check1"/>
                <div class="chu3">Create an account?</div>
                <input type="checkbox" class="check2">
                <div class="chu4">Ship to a different address?</div>
                <label class="chu"> Order notes (optional)</label><br>
                <textarea class="nhap1" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                <h3>Your order</h3>
                <table class="bang">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>Elegant Necklace × 1</th>
                            <th>$147.00</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>Subtotal</th>
                            <th>$147.00</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>Shipping</th>
                            <th>Free shipping</th>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <th>Total</th>
                            <th>$147.00</th>
                        </tr>
                    </thead>
                </table>
                <div class="nen">
                    <div>Credit Card (Stripe)</div>
                    <div class="hinh">
                        <img src="images/1.svg">
                        <img src="images/2.svg">
                        <img src="images/3.svg">
                        <img src="images/4.svg">
                        <img src="images/5.svg">
                        <img src="images/6.svg">
                    </div>
                    <label class="chu"> Card Number<span class="sao"> *</span></label><br>
                    <input type="" class="nhap" placeholder="1234 1234 1234 1234">
                    <div class="chu1"> Expiry Date<span class="sao"> *</span></div>
                    <div class="chu5"> Card Code (CVC)<span class="sao"> *</span></div>
                    <input type="" class="nhap2" placeholder="MM / YY">
                    <input type="" class="nhap3" placeholder="CVC">
                </div>
                <div class="button">
                    <a href="" class="send">Place order</a>
                </div>
        </div>
    </div> 
</div>
     